<?php
/**
 * Template Name: Grid Template, no sidebar
 * Description: A grid-based template with no sidebar
 *
 * @package WordPress
 * @subpackage CloudStrap
 */

get_header(); ?>
<div id="primary" class="container">
	<div id="contentGrid">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header page-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

						<?php
                         
                        // check if the flexible content field has rows of data
                        if( have_rows('page_layout') ):
                         
                             // loop through the rows of data
                            while ( have_rows('page_layout') ) : the_row();
                         
                                if( get_row_layout() == '1-column' ):
                        
                                    echo '<div class="entry-content row">';
                             
                                        echo '<div class="col-sm-12">';
                                        
                                        echo the_sub_field('column');
                                        
                                        echo '</div>';
                                    
                                    echo '</div>';
                         
                                elseif( get_row_layout() == '6-6' ): 
                        
                                    echo '<div class="entry-content row">';
                             
                                        $text = get_sub_field('column-left');
                                        echo '<div class="col-sm-6">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
										
										$text = get_sub_field('column-right');
                                        echo '<div class="col-sm-6">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';

                                    
                                    echo '</div>';

                                elseif( get_row_layout() == '8-4' ): 
                        
                                    echo '<div class="entry-content row">';
                             
                                        $text = get_sub_field('column-left');
                                        echo '<div class="col-sm-8">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
										
										$text = get_sub_field('column-right');
                                        echo '<div class="col-sm-4">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';

                                    
                                    echo '</div>';

                                elseif( get_row_layout() == '4-8' ): 
                        
                                    echo '<div class="entry-content row">';
                             
                                        $text = get_sub_field('column-left');
                                        echo '<div class="col-sm-4">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
										
										$text = get_sub_field('column-right');
                                        echo '<div class="col-sm-8">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
                                    
                                    echo '</div>';


                                elseif( get_row_layout() == '4-4-4' ): 
                        
                                    echo '<div class="entry-content row">';
                             
                                        $text = get_sub_field('column-left');
                                        echo '<div class="col-sm-4">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';

                                        $text = get_sub_field('column-center');
                                        echo '<div class="col-sm-4">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
										
										$text = get_sub_field('column-right');
                                        echo '<div class="col-sm-4">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
                                    
                                    echo '</div>';

                                elseif( get_row_layout() == '3-3-3-3' ): 
                        
                                    echo '<div class="entry-content row">';
                             
                                        $text = get_sub_field('column-1');
                                        echo '<div class="col-sm-3">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';

                                        $text = get_sub_field('column-2');
                                        echo '<div class="col-sm-3">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
										
										$text = get_sub_field('column-3');
                                        echo '<div class="col-sm-3">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';

										$text = get_sub_field('column-4');
                                        echo '<div class="col-sm-3">';
                                        
                                        echo $text;
                                        
                                        echo '</div>';
                                    
                                    echo '</div>';


                                endif;
                         
                            endwhile;
                         
                        else :
                         
                            // no layouts found
                         
                        endif;
                         
                        ?>        
					
				</article>


			</div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>