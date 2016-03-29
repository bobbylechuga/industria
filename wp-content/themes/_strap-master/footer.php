<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!-- footer -->
<div class="footer">
				<div class="container">
					<div class="div1">
						<div class="col-md-3 head">
							<h3>get inspired</h3>
							<ul class="inspired">
								<li><a href="#">Machinery</a></li>
								<li><a href="#">Instrumentation</a></li>
								<li><a href="#">Mechanisms</a></li>
								<li><a href="#">protections</a></li>
							</ul>
						</div>
						<div class="col-md-3 head">
							<h3>support</h3>
							<ul class="customer">
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
						
						<div class="col-md-3 head">
							<h3>contents</h3>
							<ul class="contents">
								<li><a href="#">Asperiores</a></li>
								<li><a href="#">Doloribus</a></li>
								<li><a href="#">Asperiores</a></li>
								<li><a href="#">Doloribus</a></li>
							</ul>
						</div>
						<div class="col-md-3 mail_soc">
							<div class="form_data">
								<h3>SUBSCRIBE TO OUR MAILING LIST</h3>
									<form>
										<input type="email" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}" required="">
										<input type="submit" value=" ">
									</form>

							</div>
								<div class="social">
									<ul>
										<li><a href="#" class="face"></a></li>
										<li><a href="#" class="twit"></a></li>
										<li><a href="#" class="gplus"></a></li>
									</ul>
								</div>
						</div>
						<div class="clearfix"></div>
					</div>
					
				</div>
</div>
<!-- footer -->
<!-- copy -->
<div class="div2">
	<div class="container">
		<p>© 2015 Heavy Industry. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</div>
<!-- copy -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<?php wp_footer(); ?>

</body>
</html>
