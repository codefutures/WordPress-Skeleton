<?php
/**
 * Template Name: Photo Gallery
 * Description: A photo gallery template
 *
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div id="primary" class="container">
    <div id="contentFull">
        <div class="row">
        	<div class="col-sm-12">
    
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
		
		
						<div class="showcase">
		
							<?php
							$params = array( 'width' => 300, 'height' => 200, 'crop' => true );
							$images = bfi_thumb(get_field('photo_gallery'), $params);
							if( $images ): ?>
								
							 <div id="links">
								<div class="row">
									<?php $i=0; foreach( $images as $image ): $i++; ?>
										<div class="col-sm-3 gallery-thumb">
											<a href="<?php echo $image['url']; ?>" class="thumbnail" data-gallery="" title="<?php echo $image['caption']; ?>">
											  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="img-responsive" />
											</a>
											<p><?php echo $image['caption']; ?></p>    
										</div>
										<?php if($i % 4 == 0) : ?></div><div class="row"><?php endif; ?>
									<?php endforeach; ?>
								</div>   
							 </div>
							 <?php endif; ?>
							<script>
								document.getElementById('links').onclick = function (event) {
									event = event || window.event;
									var target = event.target || event.srcElement,
										link = target.src ? target.parentNode : target,
										options = {index: link, event: event},
										links = this.getElementsByTagName('a');
									blueimp.Gallery(links, options);
								};
							</script>
	
							<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
								<!-- The container for the modal slides -->
								<div class="slides"></div>
								<!-- Controls for the borderless lightbox -->
								<h3 class="title"></h3>
								<a class="prev">‹</a>
								<a class="next">›</a>
								<a class="close">×</a>
								<a class="play-pause"></a>
								<ol class="indicator"></ol>
								<!-- The modal dialog, which will be used to wrap the lightbox content -->
								<div class="modal fade">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" aria-hidden="true">&times;</button>
												<h4 class="modal-title"></h4>
											</div>
											<div class="modal-body next"></div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary pull-left prev">
													<i class="glyphicon glyphicon-chevron-left"></i>
													Previous
												</button>
												<button type="button" class="btn btn-primary next">
													Next
													<i class="glyphicon glyphicon-chevron-right"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
										
		
		
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<!-- .entry-content --> 
				</article>
		<!-- #post-<?php the_ID(); ?> -->
    
            <?php //comments_template( '', true ); ?>
    
			</div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>