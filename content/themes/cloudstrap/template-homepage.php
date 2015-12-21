<?php
/**
 * Template Name: Homepage Template
 * Description: homepage Template
 *
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>

<section id="home-top">
	<div id="cbg" class="bg-img container">
	<div class="container">
		<div class="row">
        	<div class="col-sm-5 image fx-fadeInLeft">
                <img alt="AgilData" title="AgilData" src="<?php echo get_template_directory_uri(); ?>/images/agildata-logo.svg" width="453" class="img-responsive">
			</div>
            <div class="col-sm-6 info fx-fadeInRight white">
            	<h2><?php the_field('banner_title');?></h2>
                <?php the_field('banner_text'); ?>
            </div>
        </div>
		<div class="row buttons">   
			<div class="col-sm-5 image">
            </div>
            <div class="col-sm-6 info fx-fadeInRight">        
				<a class="btn btn-white" href="<?php the_field('beta_button_url', 'options');?>"><?php the_field('beta_button_text', 'options');?><i class="fa fa-database"></i></a>  <a class="btn btn-transparent" href="<?php the_field('whitepaper_button_url', 'options');?>"><?php the_field('whitepaper_button_text', 'options');?><i class="fa fa-arrow-circle-right"></i></a>

            </div>
        </div>
	</div>
	</div>
</section>
<section class="container text-center fx-fadeIn">
	<h1><?php the_field('section_1_title'); ?></h1>
	<?php the_field('section_1_content'); ?>
</section>







<section class="jumbotron" id="why">
	<div class="dzsparallaxer auto-init out-of-bootstrap homeBG1" data-options='{ direction: "reverse",animation_duration: "100"}'>
		<div class="divimage dzsparallaxer--target home-bg1" style="background-image:url(<?php the_field('section_2_background'); ?>);"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header>
					<h1 class="<?php if(get_field('section_2_white')){ echo 'white'; } ?> fx-fadeIn margin-bottom"><?php the_field('section_2_title'); ?></h1>
				</header>
				<div class="row fx-fadeIn">
					<div class="<?php if(get_field('section_2_white')){ echo 'white'; } ?> col-sm-7"><?php the_field('section_2_content'); ?></div>
				</div><br>
			</div>
		</div>				
	</div>
</section>




<section class="jumbotron" id="consulting">
	<div class="dzsparallaxer auto-init out-of-bootstrap homeBG2" data-options='{ direction: "normal",animation_duration: "100"}'>
		<div class="divimage dzsparallaxer--target home-bg2" style="background-image:url(<?php the_field('section_3_background'); ?>);"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-right">
				<header>
					<h1 class="<?php if(get_field('section_3_white')){ echo 'white'; } ?> fx-fadeIn margin-bottom"><?php the_field('section_3_title'); ?></h1>
				</header>
				<div class="row fx-fadeIn">
					<div class="<?php if(get_field('section_3_white')){ echo 'white'; } ?> col-sm-7 col-sm-offset-5 text-right"><?php the_field('section_3_content'); ?></div>
				</div><br>
			</div>
		</div>				
	</div>
</section>



<section class="jumbotron" id="how">
	<div class="dzsparallaxer auto-init out-of-bootstrap homeBG3" data-options='{ direction: "reverse",animation_duration: "100"}'>
		<div class="divimage dzsparallaxer--target home-bg3" style="background-image:url(<?php the_field('section_4_background'); ?>);"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header>
					<h1 class="<?php if(get_field('section_4_white')){ echo 'white'; } ?> fx-fadeIn margin-bottom"><?php the_field('section_4_title'); ?></h1>
				</header>
				<div class="row fx-fadeIn">
					<div class="<?php if(get_field('section_4_white')){ echo 'white'; } ?> col-sm-12"><?php the_field('section_4_content'); ?></div>
				</div><br>
			</div>
		</div>				
	</div>
</section>



<section class="greysection buttonbar fx-fadeIn">
	<div class="container">
		<?php include('includes/button-cta.php'); ?>
	</div>
</section>


<br><br>





<!--
<section id="what">
	<div class="container">
		<div class="row">
        	<div class="col-sm-12 text-center fx-fadeIn">
				<h1><?php the_field('section_title'); ?></h1>
			</div>
		</div>
		<div class="row">
			<?php
			if( have_rows('features') ): $i=0;
				while ( have_rows('features') ) : the_row(); $i++; ?>
					<div class="col-sm-3 fx-fadeIn text-center">
						<?php if($i==1) { $effect="cmn-t-shake"; } else { $effect="rotate"; } ?>
						<img src="<?php the_sub_field('icon'); ?>" alt="" class="img-circle <?php echo $effect; ?>">
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('description'); ?>
					</div>
				<?php endwhile;
			endif;
			?>
		</div>
		<?php include('includes/button-cta.php'); ?>
	</div>
</section>

-->






<?php /* ?>
<section class="jumbotron">
	<div class="dzsparallaxer auto-init out-of-bootstrap homeBG4" data-options='{ direction: "reverse",animation_duration: "100"}'>
		<div class="divimage dzsparallaxer--target home-bg4" style="background-image:url(<?php the_field('section_5_background'); ?>);"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header>
					<h1 class="<?php if(get_field('section_5_white')){ echo 'white'; } ?> fx-fadeIn margin-bottom"><?php the_field('section_5_title'); ?></h1>
				</header>
				<div class="row fx-fadeIn">
					<div class="<?php if(get_field('section_5_white')){ echo 'white'; } ?> col-sm-12"><?php the_field('section_5_content'); ?></div>
					
				</div><br>
			</div>
		</div>				
	</div>
</section>
<?php */ ?>





<!--

<section class="fx-fadeIn">
	<div class="container">
		<div class="row">
			<h1>How does AgilData fit</h1>
			<p>Complimenting Hadoop because big volumes of data is not enough.</p>
			<ol>
				<li>AgilData can act as a data ingestion tool inbound for Hadoop.  Using JDBC AgilData talks to the application cluster, as if writing to a SQL RDBMS and then generates downstream artifacts for real time dashboards and funnelling data into Hadoop. </li>
				<li>AgilData can act as a front end Dynamic Data Mart to Hadoop adding in memory computational performance to enable user facing applications to access Hadoop data without sacrificing performance.</li>
			</ol>
		</div>
	</div>
</section>





<section class="greysection fx-fadeIn">
	<div class="container">
		<div class="row">
			<h1>Platform Integrations</h1>
			<ol>
				<li>Enterprise Service Bus (ESB)</li>
				<li>Master Data Management (MDM)</li>
				<li>In-memory stores</li>
			</ol>
		</div>
	</div>
</section>

-->




<section id="home-clients">
	<div class="container fx-fadeIn fx-hidden fx-visible animated fadeInUp">
		<div class="row">
        	<div class="col-sm-12 text-center clients fx-fadeIn">
				<h1>OUR CLIENTS</h1>
			</div>
		</div>
        
        <div class="row fx-fadeIn">
		<?php 
        $args = array(
            'post_type'		=> 'client',
            'posts_per_page' => 6,
            'orderby' => 'rand',
            'meta_query' => array(
                array(
                    'key' => 'featured_client',
                    'value' => '1',
                    'compare' => '=='
                )
            )
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-sm-2">
                    <div class="client scale">
                    <?php if( get_field('client_website')): ?>
                    <a href="<?php the_field('client_website'); ?>" target="_blank">
						<?php 
                        $image = get_field('client_logo');
                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="img-responsive" />
                        <?php endif; ?>
                    </a>
                    <?php else: ?>
						<?php 
                        $image = get_field('client_logo');
                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="img-responsive" />
                        <?php endif; ?>
                    <?php endif; ?>
                    </div>
                </div>
			<?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
		</div>
	</div>
</section>














<!--


<section class="home-buttons">
	<div class="container">
		<?php include('includes/button-cta.php'); ?>
	</div>
</section>

-->



<!--
<section class="cd-section">
		<div class="cd-modal-action">
			<a href="#" class="btn btn-red" data-type="modal-trigger" onClick="return false;">Contact</a>
			<span class="cd-modal-bg"></span>
		</div>
		<div class="cd-modal">
			<div class="cd-modal-content">
            	<h1>Contact Us</h1>
				<?php// gravity_form( 1, false, false, false, '', false ); ?>
			</div>
		</div>
		<a href="#0" class="cd-modal-close">Close</a>
</section>
-->


	<div class="container fx-fadeIn">
		<div class="row">
        	<div class="col-sm-12">
                <div id="content">
                    <?php the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <!-- .entry-content --> 
                    </article>
                    <!-- #post-<?php the_ID(); ?> -->
                    
                </div>
			</div>
        </div>

	</div>


<?php get_footer(); ?>
