<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
<!-- CHJ -->		
		<?php if ( have_posts() ): while( have_posts() ): the_post();?>
		  <?php the_content();?>
		<?php endwhile; endif;?>
<!-- Hasta aquí -->		
	</div>
</div>
<!-- //banner-bottom -->
<!--destination-starts-->

<!--destination-end-->
<!--start-yachts-->

	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>

<!-- features-->
<div class="services-bottom">
		<div class="container">
			<h3 class="tittle">ESPACIO OPCIONAL</h3>
			<div class="strip three"></div>
			<div class="services-bottom-grids">
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>vel illum qui dolorem 
							eum fugiat quo voluptas nulla</h4>
						<p>Texto de ejemplo texto de ejemplo texto de ejemplo
						texto de ejemplo texto de ejemplo texto de ejemplo texto de ejemplo 
						texto de ejemplo texto de ejemplo .</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>vel illum qui dolorem 
							eum fugiat quo voluptas nulla</h4>
						<p>Texto de ejemplo texto de ejemplo texto de ejemplo
						texto de ejemplo texto de ejemplo texto de ejemplo texto de ejemplo 
						texto de ejemplo texto de ejemplo .</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>vel illum qui dolorem 
							eum fugiat quo voluptas nulla</h4>
						<p>Texto de ejemplo texto de ejemplo texto de ejemplo
						texto de ejemplo texto de ejemplo texto de ejemplo texto de ejemplo 
						texto de ejemplo texto de ejemplo .</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>vel illum qui dolorem 
							eum fugiat quo voluptas nulla</h4>
						<p>Texto de ejemplo texto de ejemplo texto de ejemplo
						texto de ejemplo texto de ejemplo texto de ejemplo texto de ejemplo 
						texto de ejemplo texto de ejemplo .</p>
					</div>
				
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //features-->




	
<?php get_footer(); ?>
