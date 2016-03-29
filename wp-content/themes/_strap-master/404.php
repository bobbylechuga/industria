<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<div class="banner-bottom">
	<div class="container">
		<h3 class="tittle"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h3>
		<div class="strip"></div>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s' ); ?></p>
	</div>
</div>



<?php get_footer(); ?>



