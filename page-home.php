<?php
/**
 * Template Name: Home
 *
 * @package culture2015
 */
	get_header(); 
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );
	$page_header_overlay = get_post_meta( get_the_ID(), "featured_overlay", true );
?>

<section class="bg-cover featured-header">
	<div class="wrap centered">
		<h1>Culture Camp 2015</h1>
		<p class="featured-subtitle">Great organizational culture doesn’t happen by accident.<br>It starts with <b>you</b>.</p>
		<a href="#notify" class="button button-outline">I’m ready, count me in</a>
	</div><!-- /.wrap -->
	<div class="overlay"></div>
</section>

<section class="intro">
	<div class="wrap mid-wrap">
		<p>We love organizational culture, positive psychology, brain hacks, 
			cognitive biases, and building incredible teams...</p>
		<p>... so we’re bringing together a high concentration of awesome people who 
			want to intentionally grow great cultures in their organizations. We believe 
			that when culture improves, everyone benefits.</p>
	</div><!-- /.wrap -->
</section>

<section class="beliefs">
	<div class="wrap mid-wrap">
		<div class="content-highlight">
			<p>We believe:</p>

			<p>
				<b>Connecting with people matters.</b>
				<br>
				The best part of most conferences is the hallway conversations 
				between (and sometimes during) sessions. This conference is all 
				hallway conversations, except they happen in rooms.
			</p>

			<p>
				<b>Every person participates, and everyone can impact culture.</b>
				<br>
				We provide the space, you set the agenda, and we all get to 
				learn from each other is small group discussions.
			</p>

			<p>
				<b>Everyone benefits from sharing. </b>
				<br>
				Each of us learns more by openly exchanging information and 
				experiences through collaboration, discussion and dialogue.
			</p>

			<p>
				<b>Great culture requires integrity. </b>
				<br>
				There is more than one way to grow a great culture, but all 
				cultures are built on integrity and honesty.
			</p>

			<p>
				<b>Great culture leads to greater things for more people.</b>
				<br>
				Good organizations are realizing that culture moves the needle.
			</p>
		</div><!-- /.mid-wrap /.content-highlight -->
	</div><!-- /.wrap -->
</section>

<section class="social-proof">
	<div class="wrap mid-wrap">
		<p class="centered">People had a great time with the last unconference:</p>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<blockquote class="twitter-tweet" lang="en"><p>First unconference, was a like a breath of fresh air... cool people, new concepts <a href="https://twitter.com/hashtag/culturedc?src=hash">#culturedc</a> <a href="http://t.co/woQtmcuu">pic.twitter.com/woQtmcuu</a></p>&mdash; Omar (@cherubsta) <a href="https://twitter.com/cherubsta/status/252153616339718144">September 29, 2012</a></blockquote>
		<blockquote class="twitter-tweet" lang="en"><p>Loved tour of <a href="https://twitter.com/themotleyfool">@themotleyfool</a> office space exploring its culture! Really cool company. Thanks <a href="https://twitter.com/Cicotello">@Cicotello</a> chief learning officer <a href="https://twitter.com/hashtag/culturedc?src=hash">#culturedc</a></p>&mdash; Andrea Chiou (@andreachiou) <a href="https://twitter.com/andreachiou/status/252146804290887680">September 29, 2012</a></blockquote>
		<blockquote class="twitter-tweet" lang="en"><p>Really enjoyed my time today at Culture Camp DC and hanging out at the Mötley Fool HQ. <a href="https://twitter.com/hashtag/culturedc?src=hash">#culturedc</a></p>&mdash; Brittany Mederos (@brim) <a href="https://twitter.com/brim/status/252106389034508288">September 29, 2012</a></blockquote>
		<blockquote class="twitter-tweet" lang="en"><p>Absolutely loved the <a href="https://twitter.com/hashtag/culturedc?src=hash">#culturedc</a> talk about Valve software and flat organizational structure.</p>&mdash; Jen Frazier (@jenfraiz) <a href="https://twitter.com/jenfraiz/status/252129828000641025">September 29, 2012</a></blockquote>
		<p class="loved-it centered">People <b>loved</b> it just as much as we loved putting it on. This year will be just as great.</p>
	</div>
</section>

<section class="bg-cover event-details">
	<div class="wrap mid-wrap centered">
		<p>We’re still ironing out the marvelous details, but here’s what we can share so far:</p>
		<div class="content-well">
			<p><b>Date:</b><br>April / May 2015</p>
			<p><b>Venue:</b><br>somewhere Metro accessible.</p>
			<p>
				<b>Schedule:</b><br>a full day, most likely 9am–5pm
				<br><a href="#">see last year’s schedule</a>
			</p>
		</div><!-- /.content-well -->
	</div><!-- /.wrap -->
	<div class="overlay"></div>
</section>

<section class="notify" name="notify" id="notify">
	<div class="wrap mid-wrap centered">
		<p>Registration won’t open for a bit, but pass along your email address 
			and we’ll keep you in the loop:</p>
		<!-- Mailchimp email input form + submit button -->
		<input type="email" placeholder="Enter your email address" />
		<submit class="button">Notify me</submit>
	</div>
</section>

<?php get_footer(); ?>
