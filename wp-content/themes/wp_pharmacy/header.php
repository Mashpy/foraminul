<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
<link rel='stylesheet' href="<?php bloginfo('stylesheet_url')?>" type="text/css" />
	<?php wp_head(); ?>
<meta name="description" content="Department of Pharmacy (ফার্মেসী বিভাগ), Noakhali Science and Technology University">
<meta name="keywords" content="nstupharma, nstu pharma, nstu, pharma">    
	<title> <?php echo wp_strip_all_tags(get_the_title( $post_id ));?>  | <?php bloginfo( 'name' ); ?> </title>
<meta name="google-site-verification" content="ykQ8H070GAX_dDUkqeuPYjzBNK7_BJNeQETr6q0LV4A" />
</head>

<body <?php body_class(); ?>>
<div class="container" >
<ol class="breadcrumb">	
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<!--Rone fix the size and padding of header image-->					
				<img class="header-image" src="<?php header_image(); ?>" width="20px" height="20px" alt="">
				</a>
 
				<?php endif; ?>
  <div id="header-left">
				<div class= "logo"><img style="padding-right:4px" src="<?php echo get_template_directory_uri();?>/images/nstu.png"  /></div>
     
    <div class="nstu"<span style="color:#1818A1;font-wiight:bold;padding-left: 14px;font-size: 29px;">NSTU</span><br>
  <span style="font-size:10px;">Noakhali Science & Technology<br> University</span></div>
 
  <div class="pharmacy"><span style="height:20px;padding-left:10px;height:40px;" >| </span><span style="font-size:24px;">Department of pharmacy</span> <br><span style="padding-left:21px;">Faculty Science</span></div>
 
                                                                                                                            </div>
  
<nav class="" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div style="padding-top:13px" class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      

    </div>
 <form class="navbar-form navbar-right" role="search" action="<?php esc_url( site_url() ) ?>" method="get">
    <div class="form-group">
       <input name="s" type="text" class="form-control" placeholder="Search">
    </div>
       <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
</form> 
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
          
    </div>

</nav>
<div class="clearfix">
	
  <div id="main">
    <div>
      <div class="pull-right">
    <a class="sb large circle facebook" style="margin-left:5px" target="_blank" href="http://www.facebook.com/nstupharma">Facebook</a>
<a class="sb large circle twitter" target="_blank" href="#">Twitter</a>
<a class="sb large circle linkedin" target="_blank" href="#">LinkedIn</a>
<a class="sb large circle vimeo" target="_blank" href="#">RSS</a>
<a class="sb large circle rss" target="_blank" href="#">RSS</a>
      </div>
    </div>
    <div style="padding-left: 16px; margin-top:3px;margin-bottom:13px">
  <div style="font-size:23px"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
<div style="margin-bottom: 10px; font-size:18px">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<?php echo esc_html( $description ); ?>
	<?php endif; ?>
	</div>
</div>
</div>
	





		
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

        <?php
                      wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 10,
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav no-float',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
<img style="padding-right:4px" src="<?php echo get_template_directory_uri();?>/images/banner.jpg"  />
<div class="clearfix">