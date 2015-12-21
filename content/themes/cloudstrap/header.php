<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]-->
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	//bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

	?>
</title>

<meta name="author" content="">

<!--  Mobile Viewport Fix -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the images folder -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<!--60X60-->

<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_url'); ?>/js/html5shiv.js"></script>
      <script src="<?php echo bloginfo('template_url'); ?>/js/respond.js"></script>
	  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lt-ie9.css" type="text/css" />
    <![endif]-->

</head>

<body <?php body_class(); ?>  data-spy="scroll" data-target="#navbar">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2314969-3', 'auto');
  ga('send', 'pageview');

</script>


    <!-- Modal -->
    <div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="modal-title" id="myModalLabel">Contact Us</h1>
			<?php gravity_form( 1, false, false, false, '', false ); ?>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- Top Nav -->
<header class="navbar navbar-inverse bs-docs-nav navbar-static-top affix fx-fadeInDown fx-hidden fx-visible animated fadeInDown" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
      	<span class="icon-bar top-bar"></span>
      	<span class="icon-bar middle-bar"></span>
      	<span class="icon-bar bottom-bar"></span>
      </button>
      <a href="../" class="navbar-brand"><img alt="AgilData" title="AgilData" src="<?php echo get_template_directory_uri(); ?>/images/agildata-icon-white.svg"></a>
    </div>
    <nav id="navbar" class="navbar-collapse collapse bs-navbar-collapse" role="navigation">
	
		<?php wp_nav_menu( array( 
			'container'       	=> '',
			'depth'             => 2,
			'menu_class'      	=> 'nav navbar-nav',
			'theme_location' 	=> 'primary',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
			) ); ?>

		<a class="contact-modal" data-toggle="modal" data-target="#myModal" href="#">Contact</a>
    </nav>
  </div>
</header>

<?php if( !is_front_page() ) : ?>
<div id="page" class="container">
	<div id="main">
		<div class="breadcrumbs">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
		</div>
	</div>
</div>
<?php endif; ?>

