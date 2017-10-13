<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--[if lt IE 9]> 
 			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->
		<title>Макет 2</title>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body>
		
		<header>
			<div class="header">
				<img class="header_img" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg"/>
			</div>
			<div class="name">
				<img class="name_img" src='<?php echo get_template_directory_uri(); ?>/img/name.png' />
			</div>
			
			<a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
			
			<nav>
    <ul class="menu">
   <li><a href="#"><i class="icon-home"></i>HOME</a>
   <ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Sub-Menu 2</a></li>
   <li><a href="#">Sub-Menu 3</a></li>
   </ul>
   </li>
  <li><a  href="#"><i class="icon-user"></i>ABOUT</a></li>
  <li><a  href="#"><i class="icon-camera"></i>PORTFOLIO</a>
  <ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Level 3 Menu</a>
    <ul>
    <li><a href="#">Sub-Menu 4</a></li>
   	<li><a href="#">Sub-Menu 5</a></li>
	<li><a href="#">Sub-Menu 6</a></li>
    </ul>
   </li>
   </ul>
  </li>
  <li><a  href="#"><i class="icon-bullhorn"></i>BLOG</a></li>
  <li><a  href="#"><i class="icon-envelope-alt"></i>CONTACT</a></li>
  </ul>
  </nav>
			
		</header>