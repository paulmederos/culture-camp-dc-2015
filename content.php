<?php
/**
 * @package culture2015
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("home-news-item group"); ?>>
	<a href="<?php the_permalink() ?>" class="home-news-link">
		<div class="post-date"><?php the_date(); ?></div>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="post-summary"><?php the_excerpt(); ?></div>

		<footer class="entry-meta">
		</footer><!-- .entry-meta -->
	</a>
</article><!-- #post-## -->
