<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!CHJ-->
<script src="<?php echo get_template_directory_uri(); ?>/js/analytics.js"  type="text/javascript"></script>
    
<title>
	<?php wp_title('|',true,'right');
	      bloginfo('name');?></title>
<?php wp_head(); ?>
<style>
  .banner {
    background:url('<?php if(is_home() || is_front_page() || !has_post_thumbnail()) { ?> 
        ../images/4.jpg) <?php } else {  
        $urlFeaturred = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); 
        echo $urlFeaturred; 
         } ?>') no-repeat 0px 0px;
         background-size:cover;
-webkit-background-size: cover;
-o-background-size: cover;
-ms-background-size: cover;
-moz-background-size: cover;
position:relative;
  }
</style>
</head>

<body>
<!-- top header -->
<div class="banner <?php 
      if(!is_front_page() ) { ?>
        page-head<?php } ?>" >
	<div class="container">
		<div class="top-header">
				<div class="top-left">
					  <?php
						  $arguments = array(
						    'theme_location' => 'header-menu'
						      
						  );
						  wp_nav_menu($arguments);
						?>
				</div>
				<div class="top-right">
				  <a class="scroll intranet" href="#">Intranet</a>
				</div>
				<div class="clearfix"></div>
				<div class="top-logo">
					<a href="<?php bloginfo('url');?>"><span><img src="<?php echo get_template_directory_uri()."/images/logo-soletanche.png"; ?>" alt="<?php bloginfo('name');?>"></span>
					<i><?php bloginfo('description');?></i>
					</a>
				</div>
		</div>
		<div class="top-nav">
					<div class="nav-icon">
							<a href="#" class="right_bt" id="activator"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> </a>
							<a class="scroll top-indus" href="#top-industries">Servicios</a>
							<div class="clearfix"></div>
					</div>
					<div class="box" id="box">
						<div class="box_content">        					                         
							<div class="box_content_center">
								<div class="form_content">
									<div class="menu_box_list">
											<?php
						            $arguments = array(
						              'theme_location' => 'header-menu'
						              
						                
						            );
						            wp_nav_menu($arguments);
						          ?>
									</div>
									<a class="boxclose" id="boxclose"> <span> </span></a>
								</div>                                  
							</div> 	
						</div> 
					</div>       	  
		</div>
				<!--start-click-drop-down-menu-->
						<!--start-dropdown-->
						 <script type="text/javascript">
							var $ = jQuery.noConflict();
								$(function() {
									$('#activator').click(function(){
										$('#box').animate({'top':'0px'},900);
									});
									$('#boxclose').click(function(){
									$('#box').animate({'top':'-1000px'},900);
									});
								});
								$(document).ready(function(){
								//Hide (Collapse) the toggle containers on load
								$(".toggle_container").hide(); 
								//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
								$(".trigger").click(function(){
									$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
								});
													
							});
						</script>
				<!--//End-click-drop-down-menu-->
		<div class="banner-info">
			<!-- responsiveslides -->
							
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
			<!-- responsiveslides -->
			
			<?php 
      if(is_front_page() ) { ?>
        
			
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>UN GRUPO DE LIDERAZGO MUNDIAL</h3>
							<p>CON PRESENCIA EN CHILE</p>
							<a href="#" class="hvr-rectangle-out button">SEGUIR LEYENDO</a>
							<!--<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>-->
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>LA SEGURIDAD DEL TRABAJADOR</h3>
							<p>ES NUESTRO FUNDAMENTO</p>
							<a href="#" class="hvr-rectangle-out button">SEGUIR LEYENDO</a>
							<!--<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>-->
						</div>
					</li>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- //top header -->
