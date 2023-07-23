<?php													
	ini_set('session.use_trans_sid', false);			
	ini_set('url_rewriter.tags', '');					
	session_name('rocketcakelogin');					
	session_start();									
	if(!isset($_SESSION['user']))						
	{													
		$pagename = $_SERVER['REQUEST_URI'];			
		$_SESSION['targetpage'] = $pagename;			
		header('Location: login.php');				
		exit;											
	}													
 ?><!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index_php.css">
</head>
<body>
<div class="textstyle1">
<div id="menu_38f1d0e3"><div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_5abfa5b"  class="menustyle1 menu_38f1d0e3_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
  <span class="textstyle2">&#8801;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_7a6e5f84"  class="menustyle2 menu_38f1d0e3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1060;&#1072;&#1081;&#1083;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_76461fe4"  class="menustyle3 menu_38f1d0e3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1054;&#1087;&#1094;&#1080;&#1080;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_ceecfd3"  class="menustyle4 menu_38f1d0e3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1057;&#1087;&#1088;&#1072;&#1074;&#1082;&#1072;</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_38f1d0e3= new wsp_menu('menu_38f1d0e3', 'menu_38f1d0e3', 10, null, true);

		js_menu_38f1d0e3.createMenuForItem('menuentry_5abfa5b', ["  <span class=\"textstyle3\">&#1054; &#1087;&#1088;&#1086;&#1075;&#1088;&#1072;&#1084;&#1084;&#1077;...</span> ", 'javascript:void(0);', '']);
		js_menu_38f1d0e3.createMenuForItem('menuentry_7a6e5f84', []);
		js_menu_38f1d0e3.createMenuForItem('menuentry_76461fe4', []);
		js_menu_38f1d0e3.createMenuForItem('menuentry_ceecfd3', ["  <span class=\"textstyle3\">&#1054; &#1087;&#1088;&#1086;&#1075;&#1088;&#1072;&#1084;&#1084;&#1077;...</span> ", 'javascript:void(0);', '']);

	</script>
</div></div>  </div>
</body>
</html>