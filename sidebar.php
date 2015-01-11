<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package culture2015
 */

$hide_primary_sidebar = get_post_meta( get_the_ID(), "hide_primary_sidebar", true );

?>
	<div id="secondary" class="widget-area group" role="complementary">
		
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<!--  
			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'culture2015' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'culture2015' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
		-->

		<?php endif; // end sidebar widget area ?>

		<?php if ($hide_primary_sidebar == 'true'): ?>
			<!-- Removed default sidebar for this page (look at Page options) -->
		<?php else: ?>
			<!-- Begin custom side modules found in sidebar.php -->

			<!-- <aside class="widget widget_text store-widget">
				<h3 class="widget-title" id="store-widget-title">Sidebar Widget Title</h3>
				<div class="textwidget">
				</div>
			</aside> -->

			<!-- end custom side modules -->
		<?php endif; ?>

	</div><!-- #secondary -->
