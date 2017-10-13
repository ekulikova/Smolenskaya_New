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
			
			<nav>
				<ul>
					<li><a href="#">Really Tall Menu</a>
						<ul>
							<li><a href="#">Lorem</a>
								<ul>
									<li><a href="#">Resets</a></li>
									<li><a href="#">Grids</a></li>
									<li><a href="#">Frameworks</a></li>
								</ul>
							</li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Dolor</a></li>
						</ul>
					</li>
					<li><a href="#">Kinda Tall Menu</a>
						<ul>
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Dolor</a></li>
						</ul>
					</li>
					<li><a href="#">Average Menu</a>
						<ul>
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Dolor</a></li>
						</ul>
					</li>
					<li><a href="#">No Menu</a>
					</li>
				</ul>
			</nav> 

		</header>