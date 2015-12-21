<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */
?>
		<div id="secondary" class="widget-area col-md-4">
			<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

				<aside id="search" class="widget widget_search" role="complementary">
					<?php //get_search_form(); ?>
					<h4 class="widgettitle">Placeholder Sidebar</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</aside>

				<aside id="archives" class="widget" role="complementary">
					<h4 class="widgettitle"><?php _e( 'Archives', 'themename' ); ?></h4>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget" role="complementary">
					<h4 class="widgettitle"><?php _e( 'Meta', 'themename' ); ?></h4>
					<ul>
						<?php wp_register(); ?>
						<aside role="complementary"><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->