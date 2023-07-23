<?php												
	$pagename = basename($_SERVER['PHP_SELF']);		
													
	ini_set('session.use_trans_sid', false);		
	ini_set('url_rewriter.tags', '');				
	session_name('rocketcakelogin');				
	session_start();   								
													
	$targetpage = '';								
	$user = '';										
	$password = '';									
													
	if (isset($_SESSION['targetpage']))	$targetpage = $_SESSION['targetpage'];
	if (isset($_POST['name'])) $user = $_POST['name'];				
	if (isset($_POST['password'])) $password = $_POST['password'];	
																	
	$users = array("admin");									
	$passwords = array("admin");							
																	
	$loggedin = false; 												
																	
	for ($i=0;$i<count($users); ++$i) 								
	{    															
		if ($users[$i] == $user &&									
			$passwords[$i] == $password)   							
		{															
			$loggedin = true;										
			break;													
		} 															
	} 																
																	
	if ($user != '')												
	{																
		if (!$loggedin) 											
		{   														
			$suffix = '';											
			if ($user != '') $suffix = '?msg=wrongpassword';		
																	
			header('Location: ' . $pagename . $suffix );			
			exit; 													
		}															
		else														
		{    														
			$_SESSION['user'] = $user;    							
			if ($targetpage == '')									
				echo ('logged in.');								
			else													
				header('Location: ' . $targetpage);					
			exit; 													
		}															
	}																
?><!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="login_php.css">
</head>
<body>
<div class="textstyle1">
<div id="menu_70954eb3"><div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_756977fa"  class="menustyle1 menu_70954eb3_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
  <span class="textstyle2">&#8801;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_1ccbda6e"  class="menustyle2 menu_70954eb3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1060;&#1072;&#1081;&#1083;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_64589801"  class="menustyle3 menu_70954eb3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1054;&#1087;&#1094;&#1080;&#1080;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_149edc9c"  class="menustyle4 menu_70954eb3_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle3">&#1057;&#1087;&#1088;&#1072;&#1074;&#1082;&#1072;</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_70954eb3= new wsp_menu('menu_70954eb3', 'menu_70954eb3', 10, null, true);

		js_menu_70954eb3.createMenuForItem('menuentry_756977fa', ["  <span class=\"textstyle3\">&#1060;&#1072;&#1081;&#1083;</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle3\">&#160;&#160;&#160;&#1042;&#1099;&#1093;&#1086;&#1076;</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle3\">&#1054;&#1087;&#1094;&#1080;&#1080;</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle3\">&#1057;&#1087;&#1088;&#1072;&#1074;&#1082;&#1072;</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle3\">&#160;&#160;&#160;&#1054; &#1087;&#1088;&#1086;&#1075;&#1088;&#1072;&#1084;&#1084;&#1077;...</span> ", 'javascript:void(0);', '']);
		js_menu_70954eb3.createMenuForItem('menuentry_1ccbda6e', ["  <span class=\"textstyle3\">&#1042;&#1099;&#1093;&#1086;&#1076;</span> ", 'javascript:void(0);', '']);
		js_menu_70954eb3.createMenuForItem('menuentry_64589801', []);
		js_menu_70954eb3.createMenuForItem('menuentry_149edc9c', ["  <span class=\"textstyle3\">&#1054; &#1087;&#1088;&#1086;&#1075;&#1088;&#1072;&#1084;&#1084;&#1077;...</span> ", 'javascript:void(0);', '']);

	</script>
</div></div><span class="textstyle4"><br/><br/><br/></span>  </div>
<div class="textstyle5">
<form  action=""
enctype="application/x-www-form-urlencoded"
method="POST" id="form_3198ceaa"><div id="form_3198ceaa_padding" ><div class="textstyle1">  <span class="textstyle4">&#1042;&#1093;&#1086;&#1076; &#1074; &#1089;&#1077;&#1090;&#1100;<br/><br/>&#1051;&#1086;&#1075;&#1080;&#1085;<br/></span>
<input type="text" value="" title="" name="name"  id="edit_31d6b3e8" >
  <span class="textstyle4"><br/><br/>&#1055;&#1072;&#1088;&#1086;&#1083;&#1100;<br/></span>
<input type="password" value="" title="" name="password"  id="edit_22bff3a2" >
  <span class="textstyle4"><br/><br/></span>
<input name="Button1" type="submit" value="OK" title=""  id="button_6762d277" >
  <span class="textstyle4"><br/></span>
</div>
<div style="clear:both"></div></div></form>  </div>
<div class="textstyle1">
<script type="text/javascript">// this code will display a "wrong password!" message on the page if the password was wrong

var wrongPasswordText = "Wrong password!"

if (window.location.search.indexOf("msg=wrongpassword") != -1)
{
  var arrs = document.getElementsByTagName("input");
  if (arrs.length && arrs[arrs.length-1])
  {
    var newelem = document.createElement("div");
    newelem.innerHTML = '<span style="color:red;">' + wrongPasswordText + '</span><br/>';			
    arrs[arrs.length-1].parentNode.insertBefore(newelem, arrs[arrs.length-1]);
  }
}
</script>  </div>
</body>
</html>