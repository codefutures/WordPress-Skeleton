<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div class="container">
		<section id="primary" role="region" class="row">
			<div id="content" class="col-md-8">

				<?php the_post(); ?>

				<header class="head-page">
					<h3 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: <span>%s</span>', 'themename' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: <span>%s</span>', 'themename' ), get_the_date( 'F Y' ) ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: <span>%s</span>', 'themename' ), get_the_date( 'Y' ) ); ?>
						<?php else : ?>
							<?php _e( 'Blog Archives', 'themename' ); ?>
						<?php endif; ?>
					</h3>
				</header>

				<?php rewind_posts(); ?>

				<?php get_template_part( 'loop', 'archive' ); ?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</section><!-- #primary -->
	</div>
<?php get_footer(); ?>