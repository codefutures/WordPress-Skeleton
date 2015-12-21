<?php
/**
 * Template Name: Carousel
 * Description: Carousel
 *
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>


<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo get_template_directory_uri(); ?>/images/home-bg.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-sm-5 image">
                        <img alt="AgilData" title="AgilData" src="<?php echo get_template_directory_uri(); ?>/images/agildata-logo.svg" width="453" class="img-responsive">
                    </div>
                    <div class="col-sm-6 info">
                        <h2>THE REAL-TIME <strong>BIG DATA PLATFORM</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row buttons">   
                    <div class="col-sm-5 image">
                    </div>
                    <div class="col-sm-6 info">        
                        <a class="btn btn-white" href="#">Join the Beta<i class="fa fa-database"></i></a>  <a class="btn btn-transparent" href="#">Get the Whitepaper<i class="fa fa-arrow-circle-right"></i></a>
        
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo get_template_directory_uri(); ?>/images/home-bg.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo get_template_directory_uri(); ?>/images/home-bg.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<section>
<div id="primary" class="container">
    <div id="contentFull">
        <div class="row">
        	<div class="col-sm-12">
    
            <?php the_post(); ?>
    
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                <header class="entry-header page-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
    
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'themename' ) . '&after=</div>' ); ?>
                    <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
    
            <?php //comments_template( '', true ); ?>
    
			</div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
</section>

<?php get_footer(); ?>