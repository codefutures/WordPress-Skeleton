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

				<header class="page-header">
					<h1 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'themename' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>
				</header>

				<?php rewind_posts(); ?>

				<?php get_template_part( 'loop', 'author' ); ?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</section><!-- #primary -->
</div>
<?php get_footer(); ?>