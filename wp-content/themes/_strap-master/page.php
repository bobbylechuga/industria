<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div class="about two">
		
		 
		
		<div class="container">
      	
			<?php while ( have_posts() ) : the_post(); ?>

        <h3 class="tittle"><?php the_title();?></h3>	
				<div class="about-top">
				<!--  <div class="col-md-5 about-top-left">
				    <?php $urlFeaturred = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );  ?>
				    <img src="<?php echo $urlFeaturred; ?>" class="img-responsive" alt=""/>
				  </div> -->
				  <div class="col-md-12 about-top-right">
				    <p><?php the_content(); ?></p>
			    </div>
			    <div class="clearfix"></div>
			  </div>

			<?php endwhile; // End of the loop. ?>
			  	
				

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			
      
      </div>
		</div><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
