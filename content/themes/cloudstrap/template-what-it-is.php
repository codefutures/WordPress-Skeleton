<?php
/**
 * Template Name: WhatItIs Template
 * Description: WhatItIs Template
 *
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>



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
		<br><br>
		<?php include('includes/button-cta.php'); ?>
	</div>
</section>






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
