<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"D:\WWW\tp0301/application/admin\view\admin\login.html";i:1531207688;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Simpla Admin | Sign In</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="__PUBLIC__css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="__PUBLIC__css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="__PUBLIC__css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="__PUBLIC__css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="__PUBLIC__css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="__PUBLIC__css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="__PUBLIC__scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="__PUBLIC__scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="__PUBLIC__scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="__PUBLIC__scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="__PUBLIC__scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="__PUBLIC__images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="" method="post">
				
					<div class="notification information png_bg">
						<div>
							Just click "Sign In". No password needed.
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="uname"/>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="pwd"/>
					</p>
					<div class="clear"></div>
					<p style="position:relative">
						<label>code</label>
						<input class="text-input" style=" width:100px; position:absolute; left:88px;" type="text" name="code"/>
						<img src="<?php echo captcha_src(); ?>" style="position:absolute; right:0px; cursor:pointer" id="code"/>
					</p>
					<div class="clear"></div>
					<!-- <p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div> -->
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  </html>
<script>
$(function(){
	$('.button').click(function(){
		var uname = $('input[name="uname"]').val()
		var pwd = $('input[name="pwd"]').val()
		var code = $('input[name="code"]').val()
		if(uname == '' || uname == null || uname==undefined){
			alert('用户名不能为空')
			return false
		}
		if(pwd == '' || pwd == null || pwd==undefined){
			alert('密码不能为空')
			return false
		}
		if(code == '' || code == null || code==undefined){
			alert('验证码不能为空')
			return false
		}
		$.post("<?php echo url('Admin/login'); ?>",{uname:uname,pwd:pwd,code:code},function(data){
			if(data.error){
				alert(data.msg)
				location="<?php echo url('Index/index'); ?>"
			}else{
				alert(data.msg)
				change_code()
			}
		},'json')
		return false
		// $.ajax({
		// 	type:'post',
		// 	url:"<?php echo url('Admin/login'); ?>",
		// 	data:{
		// 		uanme:uname,
		// 		pwd:pwd,
		// 		code:code
		// 	}
		// 	success:function(msg){

		// 	}
		// })

	})

	$('#code').click(function(){
		change_code()
	})
})

function change_code(){
	$('#code').attr('src',"<?php echo captcha_src(); ?>"+'?'+Math.random())
}
</script>