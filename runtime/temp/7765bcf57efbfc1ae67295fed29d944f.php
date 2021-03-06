<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"D:\WWW\tp0301/application/admin\view\level\levelupdate.html";i:1531203223;s:48:"D:\WWW\tp0301/application/admin\view\layout.html";i:1531811546;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title><?php echo $title; ?></title>
		
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
		<script type="text/javascript" src="__PUBLIC__scripts/jquery-1.11.1.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="__PUBLIC__scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="__PUBLIC__scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="__PUBLIC__scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="__PUBLIC__scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="__PUBLIC__scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="__PUBLIC__scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="__PUBLIC__scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		<link rel="stylesheet" href="__PUBLIC__kindeditor/themes/default/default.css" />
		<link rel="stylesheet" href="__PUBLIC__kindeditor/plugins/code/prettify.css" />
		<script charset="utf-8" src="__PUBLIC__kindeditor/kindeditor-all-min.js"></script>
		<script charset="utf-8" src="__PUBLIC__kindeditor/lang/zh-CN.js"></script>
		<script charset="utf-8" src="__PUBLIC__kindeditor/plugins/code/prettify.js"></script>
		<script>
			KindEditor.ready(function(K) {
				var editor1 = K.create('textarea[name="content"]', {
					cssPath : '__PUBLIC__kindeditor/plugins/code/prettify.css',
					uploadJson : '__PUBLIC__kindeditor/php/upload_json.php',
					fileManagerJson : '__PUBLIC__kindeditor/php/file_manager_json.php',
					allowFileManager : true,
					afterCreate : function() {
						var self = this;
						K.ctrl(document, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
						K.ctrl(self.edit.doc, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
					}
				});
				prettyPrint();
			});
		</script>
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="__PUBLIC__images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				你好, <?php echo \think\Session::get('user'); ?>, <br />
				<br />
				<a href="<?php echo url('Admin/logout'); ?>" title="Sign Out">退出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<!-- <li>
					<a href="http://www.google.com/" class="nav-top-item no-submenu"> Add the class "no-submenu" to menu items with no sub menu
						Dashboard
					</a>       
				</li> -->
				
				<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;if($nav['fid'] == 0): if(in_array($nav['id'],$adminlevel)): ?>
				<li>
					<a href="#" class="nav-top-item <?php if($controller == strtolower($nav['controller'])): ?>current<?php endif; ?>">
						<?php echo $nav['name']; ?>
					</a>
					<ul>
						<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['fid'] == $nav['id'] && $v['state']==1): if(in_array($v['id'],$adminlevel)): ?>
						<li ><a href="<?php echo url($v['controller'].'/'.$v['action']); ?>" <?php if($controller == strtolower($v['controller']) && $action==strtolower($v['action'])): ?>class="current"<?php endif; ?>><?php echo $v['name']; ?></a></li>
						<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li>
				<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
				   
				
			</ul> <!-- End #main-nav -->
				
			
			
			
		</div></div> <!-- End #sidebar -->
		
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			
			
			
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
					
					<div class="tab-content default-tab" id="tab2">
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>父级权限</label>
									<select name="fid" class="small-input">
										<option value="0">--请选择分类--</option>
										<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo $v['id']; ?>" <?php if($one['fid'] == $v['id']): ?>selected="selected"<?php endif; ?>><?php echo $v['name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select> 
								</p>
								<p>
									<label>权限名称</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" value="<?php echo $one['name']; ?>"/> 
								</p>
								<p>
									<label>模块</label>
										<input class="text-input small-input" type="text" id="small-input" name="modules" value="<?php echo $one['modules']; ?>"/> 
								</p>
								<p>
									<label>控制器</label>
										<input class="text-input small-input" type="text" id="small-input" name="controller" value="<?php echo $one['controller']; ?>"/> 
								</p>
								<p>
									<label>方法</label>
										<input class="text-input small-input" type="text" id="small-input" name="action" value="<?php echo $one['action']; ?>"/> 
								</p>
								<p>
									<label>显示状态</label>
									<input type="radio" name="state" value="1" <?php if($one['state'] == 1): ?>checked="checked"<?php endif; ?>/>显示<br />
									<input type="radio" name="state" value="0" <?php if($one['state'] == 0): ?>checked="checked"<?php endif; ?>/>不显示
								</p>	
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
			
			
			
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>

		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
