<?php get_header(); ?>

<div class="site-content">
	<div class="site-content-about">
		<div class="site-content-about-box">
			<div class="site-content-about-me">
				<div class="site-content-about-pic">
					<img class="site-content-about-picbox" src="<?php echo esc_url(get_theme_mod('theme_new_setting_about_pic'));?>" />
				</div>
				<div class="site-content-about-info">
					<div class="site-content-about-info-profile">
						<div class="site-content-about-info-hello"><a>HI</a></div>
						<h1 class="site-content-about-info-im">I'm <b><?php echo get_theme_mod('theme_new_setting_about_name', 'John Doe')?></b></h1>
						<h1 class="site-content-about-info-dd"><?php echo get_theme_mod('theme_new_setting_about_sub', 'xxxxxxxxxx')?></h1>
					</div>
					<ul class="site-content-about-info-list">
						<li class="clearfix"><b>Age</b><span><?php echo get_theme_mod('theme_new_setting_about_age', 'xx')?></span></li>
						<li class="clearfix"><b>Birthday</b><span><?php echo get_theme_mod('theme_new_setting_about_birth', 'xx/xx - xxxx')?></span></li>
						<li class="clearfix"><b>Email</b><span><?php echo get_theme_mod('theme_new_setting_about_email', 'xxx@xxx.xx')?></span></li>
						<li class="clearfix"><b>Phone</b><span><?php echo get_theme_mod('theme_new_setting_about_phone', '+xx xxxx xxxx')?></span></li>
						<li class="clearfix"><b>Address</b><span><?php echo get_theme_mod('theme_new_setting_about_address', 'xxxxxxxxxx')?></span></li>
					</ul>
				</div>
			</div>
			<div class="site-content-about-social">
				<div class="site-content-about-social-icon"><a href="<?php echo get_theme_mod('theme_new_setting_about_facebook', '')?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>	
				<div class="site-content-about-social-icon"><a href="<?php echo get_theme_mod('theme_new_setting_about_twitter', '')?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
				<div class="site-content-about-social-icon"><a href="<?php echo get_theme_mod('theme_new_setting_about_linkedin', '')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
				<div class="site-content-about-social-icon"><a href="<?php echo get_theme_mod('theme_new_setting_about_instagram', '')?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
			</div>
		</div>
		
		<div class="site-content-about-download"><button ref="<?php echo esc_url(get_theme_mod('theme_new_setting_about_file'));?>">Download Resume</button></div>
		
		<p class="site-content-about-text"><?php echo get_theme_mod('theme_new_setting_about_me_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae massa suscipit, vulputate nulla vitae, suscipit metus. Mauris viverra dictum ex vel interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.')?></p>
	</div>
	
	<div name="skills_but" class="site-content-skills">
		<h1 class="site-content-title">Professional Skills</h1>
		<ul class="site-content-skills-box">
			<li class="site-content-skills-box-bar"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_first_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_first_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_first_proc', '1')?>"></span></div></li>
			<li class="site-content-skills-box-bar"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_second_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_second_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_second_proc', '1')?>"></span></div></li>
			<li class="site-content-skills-box-bar"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_third_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_third_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_third_proc', '1')?>"></span></div></li>
			<li class="site-content-skills-box-bar"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_fourth_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_fourth_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_fourth_proc', '1')?>"></span></div></li>
			<li class="site-content-skills-box-bar bar-last"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_fifth_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_fifth_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_fifth_proc', '1')?>"></span></div></li>
			<li class="site-content-skills-box-bar"><span class="clearfix"><b><?php echo get_theme_mod('theme_new_setting_skills_sixth_name', 'XXXX')?></b><p><?php echo get_theme_mod('theme_new_setting_skills_sixth_proc', '1')?>%</p></span><div class="site-content-skills-box-bar-b"><span class="site-content-skills-box-bar-f" ref="<?php echo get_theme_mod('theme_new_setting_skills_sixth_proc', '1')?>"></span></div></li>
		</ul>
	</div>
	
	<div name="port_but" class="site-content-port">
		<h1 class="site-content-title">Portfolio</h1>
		<div class="buttongroup">
			<h2 id="all" class="button is-checked" data-filter="*" style="float: none !important;"><a>All</a></h2>
			<?php  
				$allcats = get_categories('child_of='.get_query_var('cat')); 
						
			    foreach ($allcats as $cat) {
				    $args = array(
				    'category__in' => array($cat->term_id)
				    );
				
				    $customInCatQuery = new WP_Query($args); 
				
				    if ($customInCatQuery->have_posts()) { ?>
				    	<h2 id="<?php echo strtolower($cat->name); ?>" style="float: none !important;" class="button" data-filter=".category-<?php echo strtolower($cat->name); ?>"><a><?php echo $cat->name; ?></a></h2>
					<?php }
					wp_reset_query();
				} 
			?>
		</div>
		<div class="projectsarchive" offset="2">
			<?php
				if ( have_posts() ) {
					$the_query = new WP_Query( 'showposts=4' );
					$i = 1;
					while ($the_query -> have_posts()) {
						$the_query -> the_post(); ?>
						
							<div name="<?php echo $i; ?>" id="post-<?php the_ID(); ?>" <?php post_class("poste"); ?>> 
								<a class="postClick">
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="postimg" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>')"></div>
										<div class="postTitle" style="display: none;"><?php the_title(); ?></div>
										<div class="postContent" style="display: none"><?php the_content(null, false); ?></div> <?php
									} 
									else { ?>
										<img src="<?php bloginfo('template_directory'); ?>/img/defaultthumb.png" class="postimg" alt="<?php the_title(); ?>" />
									<?php } ?>
								</a>
							</div>
							
					<?php $i++;}
				} else {
					get_template_part( 'no-results', 'index' ); 
				} 
			?>	
		</div>
		<button class="site-content-port-load-button">+</button>
		<div class="site-content-port-overlay">
			<div class="site-content-port-overlay-close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="site-content-port-overlay-content">
				<div class="site-content-port-overlay-image-box"><div class="site-content-port-overlay-image"></div></div>
				<div class="site-content-port-overlay-title"></div>
				<div class="site-content-port-overlay-text"></div>
			</div>
		</div>
		<div class="site-content-port-overlay-bg"></div>
	</div>
	
	<div name="serv_but" class="site-content-services">
		<div class="site-content-title">My Services</div>
		<div class="site-content-services-box">
			<span class="site-content-services-box-first clearfix">
				<i class="fa <?php echo get_theme_mod('theme_new_setting_services_first_icon', 'fa-question')?>" aria-hidden="true"></i>
				<h1><?php echo get_theme_mod('theme_new_setting_services_first_name', 'XXXXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_services_first_desc', 'XXXXXX')?></h2>
			</span>
			<span class="site-content-services-box-second clearfix">
				<i class="fa <?php echo get_theme_mod('theme_new_setting_services_second_icon', 'fa-question')?>" aria-hidden="true"></i>
				<h1><?php echo get_theme_mod('theme_new_setting_services_second_name', 'XXXXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_services_second_desc', 'XXXXXX')?></h2>
			</span>
			<span class="site-content-services-box-last clearfix">
				<i class="fa <?php echo get_theme_mod('theme_new_setting_services_third_icon', 'fa-question')?>" aria-hidden="true"></i>
				<h1><?php echo get_theme_mod('theme_new_setting_services_third_name', 'XXXXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_services_third_desc', 'XXXXXX')?></h2>
			</span>
		</div>	
	</div>
	
	<div name="exp_but" class="site-content-exp">
		<div class="site-content-title">Experience</div>
		<div class="site-content-edu-box-main exp-box-main">
			<div class="site-content-edu-box">
				<h1><?php echo get_theme_mod('theme_new_setting_experience_first_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_experience_first_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_experience_first_place', 'XXXXXXXX')?></h3>
			</div>
			<div class="site-content-edu-space"></div>
			<div class="site-content-edu-box">
				<h1><?php echo get_theme_mod('theme_new_setting_experience_second_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_experience_second_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_experience_second_place', 'XXXXXXXX')?></h3>
			</div>
			<div class="site-content-edu-space"></div>
			<div class="site-content-edu-box">
				<h1><?php echo get_theme_mod('theme_new_setting_experience_third_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_experience_third_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_experience_third_place', 'XXXXXXXX')?></h3>
			</div>
		</div>
	</div>
	
	<div name="edu_but" class="site-content-edu">
		<div class="site-content-title">Education</div>
		<div class="site-content-edu-box-main edu-box-main">
			<div class="site-content-edu-box">
				<h1><?php echo get_theme_mod('theme_new_setting_education_first_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_education_first_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_education_first_place', 'XXXXXXXX')?></h3>
			</div>
			<div class="site-content-edu-space"></div>
			<div class="site-content-edu-box">
				<h1><?php echo get_theme_mod('theme_new_setting_education_second_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_education_second_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_education_second_place', 'XXXXXXXX')?></h3>
			</div>
			<div class="site-content-edu-space" style="display: none;"></div>
			<div class="site-content-edu-box" style="display: none;">
				<h1><?php echo get_theme_mod('theme_new_setting_education_third_year', 'XXXX - XXXX')?></h1>
				<h2><?php echo get_theme_mod('theme_new_setting_education_third_educ', 'XXXXXXXX')?></h2>
				<h3><?php echo get_theme_mod('theme_new_setting_education_third_place', 'XXXXXXXX')?></h3>
			</div>
		</div>
	</div>
	
	<div name="int_but" class="site-content-int">
		<div class="site-content-title">Interests</div>
		<div class="site-content-box int-box-main">
			<h1><?php echo get_theme_mod('theme_new_setting_interests_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae massa suscipit, vulputate nulla vitae, suscipit metus. Mauris viverra dictum ex vel interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.')?></h1>
			<div class="site-content-box-int-main">
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_first_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_first_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_second_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_second_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_third_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_third_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_fourth_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_fourth_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_fifth_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_fifth_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_sixth_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_sixth_name', 'XXXXXXXX')?></span></span>
				<span class="site-content-box-int"><i class="fa <?php echo get_theme_mod('theme_new_setting_interests_seventh_icon', 'fa-question')?>" aria-hidden="true"></i><span><?php echo get_theme_mod('theme_new_setting_interests_seventh_name', 'XXXXXXXX')?></span></span>
			</div>
		</div>
	</div>
	
	<div name="con_but" class="site-content-con">
		<div class="site-content-title">Contact</div>
		<div class="site-content-box con-box-main">
			<?php dynamic_sidebar('contact-area'); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>