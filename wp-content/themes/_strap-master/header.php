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
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body>
<!-- top header -->
<div class="banner">
	<div class="container">
		<div class="top-header">
				<div class="top-left">
					<ul>
						<li><a href="#">POPULAR</a></li>
						<li><a href="machinery.html">MACHINERY</a></li>
						<li><a href="contact.html">CONTACT</a></li>
					</ul>
				</div>
				<div class="top-right">
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twi" href="#"></a></li>
						<li><a class="pin" href="#"></a></li>
						<li><a class="goog" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="top-logo">
					<a href="index.html"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>HEAVY <span>INDUSTRY</span>
					<i>A Small Scale Project</i>
					
					</a>
				</div>
		</div>
		<div class="top-nav">
					<div class="nav-icon">
							<a href="#" class="right_bt" id="activator"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> </a>
							<a class="scroll top-indus" href="#top-industries">TOP INDUSTRIES</a>
							<div class="clearfix"></div>
					</div>
					<div class="box" id="box">
						<div class="box_content">        					                         
							<div class="box_content_center">
								<div class="form_content">
									<div class="menu_box_list">
										<ul>
											<li><a class="active" href="index.html"><span>home</span></a></li>
											<li><a href="about.html"><span>about</span></a></li>
											<li><a href="typography.html"><span>services</span></a></li>
											<li><a href="machinery.html"><span>machinery</span></a></li>										
											<li><a href="contact.html"><span>Contact</span></a></li>
										
										</ul>
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
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>EXPERIENCE & CRAFTSMANSHIP</h3>
							<p>POWERED BY PEOPLE</p>
							<a href="#" class="hvr-rectangle-out button">SEE MORE</a>
							<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>OUR GOAL IS CONTINUOUSLY</h3>
							<p>SATISFY OUR CLIENTS</p>
							<a href="#" class="hvr-rectangle-out button">SEE MORE</a>
							<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->
