<?php

namespace app\admin\controller;

use think\Controller; 
use think\Config;
// use think\Request;
use think\Db;

class Admin extends Controller{

	public function login(){
		// echo md5(crypt('123',config('pwdstring')));die;
		// $str = config('pwdstring');
		if(request()->isAjax()){
			$info = ['error'=>false,'msg'=>''];
			//先判断验证码
			if(!captcha_check(input('post.code'))){
				trace('验证码错误','info');
				$info['msg'] = '验证码错误';
				return $info;
			}

			$uname = input('post.uname');
			$one = Db::name('manager')->where("uname='$uname'")->find();//find()单条查询，有值返回数组，没有返回 null
			// $one = db('manager')->where("uname='$uname'")->find();
			// print_r($one);die;
			if(!$one){
				trace('用户名不存在','info');
				$info['msg'] = '用户名不存在';
				return $info;
			}
			if($one['pwd'] != md5(crypt(input('post.pwd'),config('pwdstring')))){
				trace('账号或密码有误','info');
				$info['msg'] = '账号或密码有误';
				return $info;
			}
			//处理数据
			session('user',$uname);
			session('userId',$one['id']);

			if($one['id'] != config('superadminid')){
				//权限
				$rid = $one['rid'];//角色id
				$role = db('role')->where("id=$rid")->find();
				session('level',explode('|',$role['level']));
			}else{
				$all = db('level')->field('id')->select();
				$levelarr = array();
				foreach($all as $k=>$v){
					$levelarr[] = $v['id'];
				}
				session('level',$levelarr);
			}

			trace('登录成功','info');
			$info = ['error'=>true,'msg'=>'登录成功'];
			return $info;
		}
		return $this->fetch();
	}

	function logout(){
		session(null);
		$this->redirect('login');
	}


}

?>