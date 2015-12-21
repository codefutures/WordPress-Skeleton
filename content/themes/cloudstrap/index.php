<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div class="container">
		<div id="primary" class="row">
			<div id="content" class="col-md-8">
	
				<?php get_template_part( 'loop', 'index' ); ?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #primary -->
</div>
<?php get_footer(); ?>