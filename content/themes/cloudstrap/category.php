<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div class="container">
		<section id="primary" role="region" class="row">
			<div id="content" class="col-md-8">

				<header class="head-page">
					<h3 class="page-title"><?php
						printf( __( 'Category Archives: %s', 'themename' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h3>

					<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
				</header>

				<?php get_template_part( 'loop', 'category' ); ?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</section><!-- #primary -->
</div>

<?php get_footer(); ?>