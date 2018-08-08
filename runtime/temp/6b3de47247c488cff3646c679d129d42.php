<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"D:\WWW\tp0301/application/index\view\member\index.html";i:1531818124;s:55:"D:\WWW\tp0301/application/index\view\public\header.html";i:1531970684;s:55:"D:\WWW\tp0301/application/index\view\public\footer.html";i:1531359406;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__css/css.css"/>
<script type="text/javascript" src="__PUBLIC__js/jQuery.js"></script>
</head>

<body>
<!--header start-->
<div class="header">
    <div class="header_top">
        <div class="main">
            <?php if(session('?uname')): ?>
            <div class="left">欢迎光临法国官网！ &nbsp; <a href="<?php echo url('Member/index'); ?>"><?php echo \think\Session::get('uname'); ?></a>|<a href="<?php echo url('Member/logout'); ?>">退出</a></div>
            <div class="right">
                <a href="<?php echo url('Cart/cartList'); ?>" class="agwc">购物车</a>|<a href="<?php echo url('Member/index'); ?>" class="azh">我的账户</a>
            </div>
            <?php else: ?>
            <div class="left">欢迎光临法国官网！ &nbsp; <a href="<?php echo url('Member/register'); ?>">注册</a>|<a href="<?php echo url('Member/login'); ?>">登录</a></div>   
                
            <?php endif; ?>
        </div>
    </div>
    <div class="main">
        <div class="logo"><a href="<?php echo url('index/index'); ?>"><img src="__PUBLIC__images/logo.jpg" /></a></div>
        <div class="search">
            <form action="<?php echo url('Product/search'); ?>" method="get">
            <div class="left">
                <a href="<?php echo url('Product/search',['keyword'=>'面膜']); ?>">面膜</a>|<a href="<?php echo url('Product/search',['keyword'=>'日日']); ?>">日日</a>|<a href="<?php echo url('Product/search',['keyword'=>'芦荟']); ?>">芦荟</a>
            </div>
            <input type="text" name="keyword" class="txt" placeholder="搜索你需要的商品" />
            <input type="submit" class="btn" value="" />
            </form>
        </div>
    </div>
    <div class="nav">
        <a href="<?php echo url('index/index'); ?>" class="all">全部分类</a>
        <?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo url('Product/proList',['id'=>$cv['id']]); ?>"><?php echo $cv['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!--header end-->
<!--main start-->
<div class="main">
	<div class="menu">
    	<h1>订单中心</h1>
        <a href="#">我的订单</a>
        <a href="#">已购商品</a>
        <a href="#">我的佣金</a>
        <a href="#">我的售后</a>
        <a href="#">我的收藏</a>
        <a href="#" class="sel">个人信息</a>
        <a href="<?php echo url('address'); ?>">收货地址</a>
        <a href="#">修改密码</a>
    </div>
    <div class="user_main">
    	<div class="u_biao"><span>个人信息</span></div>
        <table class="tb_one">
        	<tr>
            	<th>用户名：</th>
            	<td>719578121@qq.com</td>
            </tr>
            <tr>
            	<th>姓  名：</th>
            	<td><input type="text" class="txt" /></td>
            </tr>
            <tr>
            	<th>性  别：</th>
            	<td>
                	<label><input type="radio" name="sex" checked="checked" />男</label>
                    <label><input type="radio" name="sex" />女</label>
                </td>
            </tr>
            <tr>
            	<th>邮  箱：</th>
            	<td><input type="text" class="txt" /></td>
            </tr>
            <tr>
            	<th>微  信：</th>
            	<td><input type="text" class="txt" /></td>
            </tr>
            <tr>
            	<th>手机号：</th>
            	<td><input type="text" class="txt" /></td>
            </tr>
            <tr>
            	<th>地  址：</th>
            	<td><textarea class="txt1"></textarea></td>
            </tr>
            <tr>
            	<th></th>
                <td><input type="button" class="btn" value="确认" /></td>
            </tr>
        </table>
    </div>
</div>
<!--main end-->
<!--footer start-->
<div class="footer">
	<div class="main">
    	<div class="footer_one">
        	<div class="top"><a href="#"><img src="__PUBLIC__images/img_01.jpg" /></a></div>
            <div class="bottom">
            	快递运费是快递公司收取的 不是我们规定的 既然顾客决定网购运费那  是必须付的 相册有信誉交易截图　 商品都是从厂家直接发出的，不同的厂家邮费也是要分开付
            </div>
            <div class="bottom">
            	<a href="#"><img src="__PUBLIC__images/img_02.png" alt="微信" /></a>
                <a href="#"><img src="__PUBLIC__images/img_03.png" alt="微博" /></a>
                <a href="#"><img src="__PUBLIC__images/img_04.png" alt="QQ" /></a>
            </div>
        </div>
        <ul class="footer_two">
        	<li>
            	<h1>我的账户</h1>
                <p><a href="#">我的账户</a></p>
                <p><a href="#">我的订单</a></p>
                <p><a href="#">退换货问题</a></p>
                <p><a href="#">配送时间</a></p>
            </li>
            <li>
            	<h1>我们的服务</h1>
                <p><a href="#">联系我们</a></p>
                <p><a href="#">装柜导航</a></p>
                <p><a href="#">隐私条款</a></p>
            </li>
            <li>
            	<h1>产品目录</h1>
                <p><a href="#">面部护肤</a></p>
                <p><a href="#">彩妆香水</a></p>
                <p><a href="#">限时特卖</a></p>
                <p><a href="#">贵宾专享</a></p>
            </li>
        </ul>
        <div class="footer_three">
        	<h1>产品搜索</h1>
            <p>
            	<a href="#">防晒</a>
                <a href="#">保湿</a>
                <a href="#">身体乳</a>
                <a href="#">沐浴露</a>
                <a href="#">香水</a>
                <a href="#">化妆水</a>...
            </p>
            <input type="text" class="txt" placeholder="寻找您需要的商品" />
            <input type="button" class="btn" value="SEARCH" />
        </div>
    </div>
    <div class="footer_four">版权所有 ©2015法国化妆品 &nbsp; &nbsp; &nbsp; 策划设计：星珀互动-SANGPER</div>
</div>
<!--footer end-->

</body>
</html>
