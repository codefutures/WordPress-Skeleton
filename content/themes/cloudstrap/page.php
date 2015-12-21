<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>

<div class="container">
<div id="primary" class="row">

	<div id="content" class="col-md-12">
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			<header class="entry-header page-header">
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
			</header>
			<!-- .entry-header -->
			
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<!-- .entry-content --> 
		</article>
		<!-- #post-<?php the_ID(); ?> -->
		
	</div>
	<!-- #content --> 
</div>
<!-- #primary -->
</div>

<?php get_footer(); ?>
