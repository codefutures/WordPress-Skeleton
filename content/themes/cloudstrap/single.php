<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div class="container">
		<div id="primary" class="row">
			<div id="content" class="col-md-8">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">

						<h1 class="entry-title"><?php the_title(); ?></h1>

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

					<div class="entry-content">
						<?php the_post_thumbnail('full', array('class' => 'img-responsive feat-img')); ?>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<!--
<div class="author_bio_section">
 
        <?php
		$author_id = get_the_author_meta( 'ID' );
		$author_photo = get_field('author_photo', 'user_'. $author_id );
		?>

        <p class="author_name">About the Author - <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php printf( esc_attr__( '%s', 'cloudstrap' ), get_the_author() );?></a></p>
		<p class="author_details">
			<?php if( $author_photo['url'] ): ?>
            	<img src="<?php echo $author_photo['url']; ?>" alt="<?php echo $author_photo['alt']; ?>" title="<?php echo $author_photo['alt']; ?>" class="avatar img-rounded" />
            <?php else: ?>
				
			<?php endif ; ?>
    
            <?php echo wp_kses( get_the_author_meta( 'description' ), null ); ?>
        
        </p>
 
        <div class="social-share">
         
            <ul class="social-share">
                <?php if ( get_the_author_meta( 'twitter' ) != '' )  { ?>
                    <li><a class="twitter" href="https://twitter.com/<?php echo wp_kses( get_the_author_meta( 'twitter' ), null ); ?>" title="<?php _e('Follow me on Twitter', 'cloudstrap')?>" target="_blank"><?php printf( esc_attr__( '', 'cloudstrap'), get_the_author() ); ?><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <?php } ?>
     
                <?php if ( get_the_author_meta( 'facebook' ) != '' )  { ?>
                    <li><a class="facebook" href="<?php echo esc_url( get_the_author_meta( 'facebook' ) ); ?>" title="<?php _e('Connect with me on Facebook', 'cloudstrap')?>" target="_blank"><?php printf( esc_attr__( '', 'cloudstrap'), get_the_author() ); ?><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <?php } ?>
         
                <?php if ( get_the_author_meta( 'linkedin' ) != '' )  { ?>
                    <li><a class="linkedin" href="<?php echo esc_url( get_the_author_meta( 'linkedin' ) ); ?>" title="<?php _e('Connect with me on LinkedIn', 'cloudstrap')?>" target="_blank"><?php printf( esc_attr__( '', 'cloudstrap'), get_the_author() ); ?><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                <?php } ?>
        
                <?php if ( get_the_author_meta( 'googleplus' ) != '' )  { ?>
                    <li><a class="google-plus" href="<?php echo esc_url( get_the_author_meta( 'googleplus' ) ); ?>" title="<?php _e('Connect with me on Google+', 'cloudstrap')?>" target="_blank"><?php printf( esc_attr__( '', 'cloudstrap'), get_the_author() ); ?><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                <?php } ?>

                <?php if ( get_the_author_meta( 'email' ) != '' )  { ?>
                    <li><a href="mailto:<?php echo get_the_author_meta( 'email' ); ?>" title="<?php _e('Send me an email', 'cloudstrap')?>"><?php printf( esc_attr__( '', 'cloudstrap'), get_the_author() ); ?><i class="fa fa-envelope-square fa-2x"></i></a></li>
                <?php } ?>
		
            </ul>
         
        </div>
 
</div>
-->

			<div class="row">
					<div class="col-sm-6 entry-meta tags">
						<?php
							$tag_list = get_the_tag_list( '', ', ' );
							if ( '' != $tag_list ) {
								$utility_text = __( '<span class="tags"><i class="fa fa-tags"></i> %2$s</span>', 'cloudstrap' );
							} else {
								$utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'cloudstrap' );
							}
							printf(
								$utility_text,
								get_the_category_list( ', ' ),
								$tag_list,
								get_permalink(),
								the_title_attribute( 'echo=0' )
							);
						?>

					</div><!-- .entry-meta -->

				<div class="col-sm-6 text-right social-share">
                    <ul id="sharing" class="social-share">
                    	<li>Share:</li>
                        <!--
						<li>
                           <a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="<?php _e('Share this article on Facebook!', 'cloudstrap')?>"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
						-->
                        <li>
                           <a class="twitter" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this article on Twitter!', 'cloudstrap')?>"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
						<!--
                        <li>
                           <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this article on Google Plus!', 'cloudstrap')?>"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
						-->
                        <li>
                           <a class="linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=LinkedIn" title="<?php _e('Share this article on Linkedin!', 'cloudstrap')?>"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
						<!--
                        <li>
                           <a class="pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo site_url()?>" class="pin-it-button" count-layout="horizontal" title="<?php _e('Share on Pinterest','cloudstrap') ?>"><i class="fa fa-pinterest-square fa-2x"></i></a>
                        </li>
                        <li class="last">
                           <a class="email-share" title="<?php _e('Share by email','cloudstrap') ?>" href="mailto:?subject=Check out this article - <?php the_title();?> &body= <?php the_permalink()?>&title="<?php the_title()?>" email"=""><i class="fa fa-envelope-square fa-2x"></i> <span><?php _e('', 'cloudstrap')?></span></a>
                        </li>
						-->
                    </ul>
				</div>
			</div>
                
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #primary -->
</div>

<?php get_footer(); ?>