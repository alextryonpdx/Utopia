<?php
/*
 * @package WordPress
 * @subpackage Utopia_Salon
 * @since Utopia_Salon 1.0
*/
get_header();
?>
	<section class="page-slides">

		<div class="row" id="slide2">
			<div class="small-text-center medium-text-left small-12 medium-8 large-text-right large-offset-6 large-6 columns valign">
				<h1>Pamper me.</h1>
				<h2>Let go with a body treatment or experience the proven health benefits of message therapy.</h2>
				<a class="book-button" id="book-button2" target="_target" href="#">Book Now</a>
				<a class="learn-button" target="_target" href="#">Learn More</a>
			</div>
		</div>

		<div class="row" id="slide1">
			<div class="small-text-center small-12 medium-text-left columns valign">
				<h1>Perfect color,<br>peace of mind...</h1>
				<h2>Done perfect every time.</h2>
				<a class="book-button" target="_target" href="#">Book Now</a>
				<a class="learn-button" target="_target" href="#">Learn More</a>
			</div>
		</div>

		<div class="row" id="slide3">
			<div class="small-text-center medium-text-left small-12 medium-8 large-text-right large-offset-6 large-6 columns valign">
				<h1>Get away</h1>
				<h2>without really getting away.</h2>
				<h2>Your paradise awaits you,</h2> 
				<h2>right here in Vancouver.</h2>
				<a class="book-button" target="_target" href="#">Book Now</a>
				<a class="learn-button" target="_target" href="#">Learn More</a>
			</div>
		</div>
		<div class="row" id="slide-top200">
		<div id="200bar" style="
				    background: -webkit-linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.0));
				        background: -moz-linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.0));
				            background: -o-linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.0));
				                background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.0));
				                display: inline-block;
				                text-align:center;
				                padding-top: 20px;
		">	
			<div class="small-12 medium-3 columns">
				<img style="float: left" id="st200-logo" src="/wp-content/themes/utopia-salon/images/st200-logo.png" alt="Salon Today 200">
			</div>
			<div class="small-12 medium-6 columns">
				<!-- <h1>Top 200 Salon</h1> -->
				<h4>Come on in and discover why Utopia was named one of Salon Today's Top 200 salons in the nation &amp;<br>Best of Clark County since 2008 (8 Time Winner)</h4>
			</div>
				<!-- <div class="row"> -->
			<div class="small-12 medium-3 columns">
				<!-- <p>one of Salon Today's Top 200 salons in the nation</p> -->
				<img style="float: right; margin-right: 15px;" id="bocc-logo" src="/wp-content/themes/utopia-salon/images/bocc-logo.png" alt="Best of Clark County">
				<!-- <p>Best of Clark County since 2008 (8 Time Winner)</p> -->
			</div>
		</div>

		<!-- 			<div class="small-12 medium-6 columns"><img id="bocc-logo" src="/wp-content/themes/utopia-salon/images/bocc-logo.png" alt="Best of Clark County"><br>Best of Clark County since 2008 (8 Time Winner)</div> -->
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</section>

    <script>
	// $(window).scroll(function(e){parallax();});
	// function parallax(){
	// 	var scrolled = $(window).scrollTop();
	// 	$('#slide1').css('background-position-y',-(scrolled*0.35)+'px');
	// 	$('#slide2').css('background-position-y',-(scrolled*0.15)+'px');
	// 	$('#slide3').css('background-position-y',(scrolled*0.07)+'px');
	// 	$('#slide-top200').css('background-position-y',(scrolled*0.4-540)+'px');
	// 	$('footer').css('background-position-x',-(scrolled*0.05)+'px').css('background-position-y',(scrolled*0.25)+'px');
	// }
    </script>

<?php get_footer(); ?>