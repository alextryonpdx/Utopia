<?php /* Template Name: Contact Page */ get_header(); ?>

<section>
	<div class="row fullWidth">
		<a target="_blank" href="https://booking.utopiadayspasalon.com/onlinebooking2/#/">
			<div class="large-6 medium-12 small-12 columns contact-blocks-book" id="contact-book-salon">
				<h1>Salon</h1>
				<div class="book-button book-button-contact">Book Now</div>
			</div>
		</a>
		<a target="_blank" href="https://booking.utopiadayspasalon.com/onlinebooking2/#/">
			<div class="large-6 medium-12 small-12 columns contact-blocks-book" id="contact-book-spa">
				<h1>Spa</h1>
				<div class="book-button book-button-contact">Book Now</div>
			</div>
		</a>		
	</div>
	<div class="row fullWidth">
		<a href="tel:13605734806">
			<div class="medium-6 small-12 columns contact-blocks" id="contact-phone">
				<h3>Feel free to call us</h3>
				<h2><strong>(360)573-4806</strong></h2>		
			</div>
		</a>
		<a target="_blank" href="https://www.google.com/maps/place/Utopia+Salon+%26+Day+Spa/@45.6778157,-122.6588323,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x5495aef44128d791:0x443342bb69e1996a!2s1503+NE+78th+St,+Vancouver,+WA+98665!3b1!8m2!3d45.6779738!4d-122.6564828!3m4!1s0x5495aef450306a79:0xfe5be1a64abebb7e!8m2!3d45.6778157!4d-122.6566383">
			<div class="medium-6 small-12 columns contact-blocks" id="contact-address">
				<h3>Our address is</h3>
				<h3><strong>1503 NE 78th St. <br>Vancouver, WA 98665</strong></h3>
			</div>
		</a>
	</div>
	<div class="row fullWidth" id="contact-pic">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/utopia_flowers.jpg" alt="flowers"> -->
		<div id="contact-form">
			<?php echo do_shortcode( '[si-contact-form form="1"]' ); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>