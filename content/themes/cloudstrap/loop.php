<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */
?>


<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		<header class="entry-header">

			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<div class="entry-meta">
							<?php
								printf( __( '<span class="meta-prep meta-prep-author"><i class="fa fa-clock-o"></i> </span><time class="entry-date" datetime="%2$s" pubdate>%3$s</time><span class="meta-sep">', 'themename' ),
									get_permalink(),
									get_the_date( 'c' ),
									get_the_date(),
									get_author_posts_url( get_the_author_meta( 'ID' ) ),
									sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
									get_the_author()
								);
							?>
						</div><!-- .entry-meta -->
			
		</header><!-- .entry-header -->

		<div class="entry-content article-roll">

			<?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></p>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<nav id="nav-below" role="article">
    <ul class="pagination">
        <li class="older"><?php next_posts_link( __( '<i class="fa fa-chevron-left"></i>&nbsp; Older posts', 'themename' ) ); ?></li>
        <li class="newer"><?php previous_posts_link( __( 'Newer posts &nbsp;<i class="fa fa-chevron-right"></i>', 'themename' ) ); ?></li>
    </ul>
</nav>
<?php endif; ?>
