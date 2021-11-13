<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="<?php bloginfo("language"); ?>"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php bloginfo("name"); ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->

   <?php if (is_rtl()): ?>
   		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/keepitsimple-rtl.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-rtl.css">
   <?php else: ?>
  		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/keepitsimple.css">
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
   <?php endif; ?>

   <!-- Script
   ================================================== -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
	<?php wp_head(); ?>
</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="<?php bloginfo("wpurl"); ?>" title=""><?php bloginfo("name"); ?></a></h1>
				<p id="intro"><?php bloginfo("description"); ?></p>

			</div>			

	   </div>

	   <nav id="nav-wrap" style='top:38px'<?php if(is_admin_bar_showing()){echo "style='top:38px'";}?> > 

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

			<?php
				$upper_menu = array(
					'menu' => 'upper-menu',
					'theme_location' => 'upper-menu',
					'container_class' => 'row',
					'items_wrap' => '<ul id="nav" class="nav %2$s">%3$s</ul>'
				);
				wp_nav_menu($upper_menu);
			?>

		

	   </nav> <!-- end #nav-wrap --> 	     

   </header> <!-- Header End -->