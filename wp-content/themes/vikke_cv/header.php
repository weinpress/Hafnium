<!DOCTYPE HTML>
	<html>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
			<title><?php bloginfo( 'name' ); ?></title>

		    <?php wp_head(); ?>
		    <?php wp_meta(); ?>
		    
		    <style>
		   		.site-load {
					display: flex;
				  	flex-direction: column;
				  	justify-content: center;
					position: fixed;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background: white;
					z-index: 999;
				}
				.center-loader {
					text-align: center;
				}
		    	@-webkit-keyframes line-scale {
				  0% {
				    -webkit-transform: scaley(1);
				            transform: scaley(1); }
				  50% {
				    -webkit-transform: scaley(0.4);
				            transform: scaley(0.4); }
				  100% {
				    -webkit-transform: scaley(1);
				            transform: scaley(1); } }
				@keyframes line-scale {
				  0% {
				    -webkit-transform: scaley(1);
				            transform: scaley(1); }
				  50% {
				    -webkit-transform: scaley(0.4);
				            transform: scaley(0.4); }
				  100% {
					-webkit-transform: scaley(1);
				            transform: scaley(1); } }
				
		   		.line-scale > div:nth-child(1) {
					-webkit-animation: line-scale 1s -0.4s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
				          	animation: line-scale 1s -0.4s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
				
				.line-scale > div:nth-child(2) {
				 	-webkit-animation: line-scale 1s -0.3s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
				          	animation: line-scale 1s -0.3s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
				
				.line-scale > div:nth-child(3) {
					-webkit-animation: line-scale 1s -0.2s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
				          	animation: line-scale 1s -0.2s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
				
				.line-scale > div:nth-child(4) {
					-webkit-animation: line-scale 1s -0.1s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
				          	animation: line-scale 1s -0.1s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
				
				.line-scale > div:nth-child(5) {
					-webkit-animation: line-scale 1s 0s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
				    		animation: line-scale 1s 0s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
				
				.line-scale > div {
					background-color: #ccc;
					width: 4px;
					height: 35px;
					border-radius: 2px;
					margin: 2px;
					-webkit-animation-fill-mode: both;
					        animation-fill-mode: both;
					display: inline-block; }
			</style>
		</head>
			
		<body <?php body_class(); ?>>
			<!-- Site Load Screen -->
			<div class="site-load">
				<div class="center-loader">
					<div class="line-scale">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div> <!-- Site Load Screen END -->
			
			<header id="mainheader" class="site-header">
				<div name="about_but" class="menu-point" style="height: 50px;"></div>
				<div class="site-header-bg" style="background: url('<?php echo esc_url(get_theme_mod('theme_new_setting_bg'));?>') no-repeat top left; background-size: cover;"></div>
				<div class="site-header-menu">
					<nav class="site-header-menu-nav">
						<span class="menu-close-but" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i></span>
						<ul>
							<li id="about_but" class="menu-item menu-item-vp"><a>About</a></li>
							<li id="skills_but" class="menu-item"><a>Skills</a></li>
							<li id="port_but" class="menu-item"><a>Portfolio</a></li>
							<li id="serv_but" class="menu-item"><a>Services</a></li>
							<li id="exp_but" class="menu-item"><a>Experience</a></li>
							<li id="edu_but" class="menu-item"><a>Education</a></li>
							<li id="int_but" class="menu-item"><a>Interests</a></li>
							<li id="con_but" class="menu-item"><a>Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="site-header-menu-mobile-logo" style="display: none;"><?php bloginfo( 'name' ); ?></div>
				<div class="site-header-menu-mobile-but" style="display: none;"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div class="back-to-top" style="display: none;"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></div>
			</header>
			