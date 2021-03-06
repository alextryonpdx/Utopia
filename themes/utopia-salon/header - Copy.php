<?php
/*
 * @package WordPress
 * @subpackage Utopia_Salon
 * @since Utopia_Salon 1.0
*/
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0" />
	<meta name="description" content="Vancouver, Washington's own - expertise in hair care, nail care, skin care, hair color, and massage.  Voted Best of Clark County!">
	<meta name="keywords" content="2015 trends, 2016 trends, 2017 trends, 2018 trends, 2019 trends, bad hair, beauty, benefits of massage, best massage, best of clark county, best salon, best spa, breast cancer, cancer, community, consultation, equals a fantastic reputation, exceptional experience, exceptional service, fundraising, getting perfect hair color, gluten free hair care, great clients, hair color, hair color salon, hair salon, hair styles, hair trends, health, hot stone massage, marathon, massage, massage therapy, muscle tension, nails, new product, organic hair care, pamper, pedicure, ponytail, proper sanitation in nail salon, relaxation, relay for life, running, runway, salon consultation, service that amazes, sore muscles, successful salon, summer feet, summer pedicures, surface hair care, trends, utopia consultation, utopia products, vegan hair care, waves">
	<meta property="og:image" content="<?=get_template_directory_uri()?>/images/site-thumbnail.jpg"/>
	<meta property="og:title" content="<? wp_title('-',true,'right'); ?>Utopia Salon & Day Spa"/>
	<title><? wp_title('-',true,'right'); ?>Utopia Salon & Day Spa</title>
	<script src="//use.typekit.net/vks2egh.js"></script>
	<script>try{Typekit.load({async:true});}catch(e){}</script>
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/foundation.full.min.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/main.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/fontello.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/nav.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/nav-icons.css">
	<script src="<?=get_template_directory_uri()?>/js/vendor/modernizr.js"></script>

<? wp_head(); ?>
</head>
<body>
	<header>
		<div class="row fullWidth">
			<div class="large-6 medium-3 small-12 small-text-center medium-text-left columns"><a href="/"><img id="logo" src="<?=get_template_directory_uri()?>/images/logo-top.png" alt="Utopia Salon & Day Spa"></a></div>
			<div class="large-6 medium-9 columns show-for-medium-up medium-text-right">
				<nav>
					<ul>
						<li data-dropdown="menu-1" data-options="is_hover:true" aria-expanded="false">
							<a href="<?=get_permalink(5)?>"><i class="icon nav-icon-scissors"></i> The Essentials</a>
							<ul id="menu-1" data-dropdown-content="" class="large f-dropdown content row text-center" aria-hidden="true">
								<li><a href="<?=get_permalink(6)?>">Hair Care</a></li>
								<li><a href="<?=get_permalink(7)?>">Nail Care</a></li>
								<li><a href="<?=get_permalink(8)?>">Retail Products</a></li>
								<br>
								<li><a href="<?=get_permalink(9)?>">Specials</a></li>
								<li><a href="<?=get_permalink(10)?>">Gift Certificates</a></li>
								<li><a href="<?=get_permalink(11)?>">Appointments</a></li>
							</ul>
						</li>
						<li data-dropdown="menu-2" data-options="is_hover:true" aria-expanded="false">
							<a href="<?=get_permalink(12)?>"><i class="icon nav-icon-rocks"></i> The Experience</a>
							<ul id="menu-2" data-dropdown-content="" class="large f-dropdown content row" aria-hidden="true">
								<li><a href="<?=get_permalink(13)?>">Massage</a></li>
								<li><a href="<?=get_permalink(14)?>">Treatments</a></li>
								<li><a href="<?=get_permalink(15)?>">Skin Care</a></li>
								<li><a href="<?=get_permalink(16)?>">Packages</a></li>
							</ul>
						</li>
						<br>
						<li data-dropdown="menu-3" data-options="is_hover:true" aria-expanded="false">
							<a href="<?=get_permalink(17)?>"><i class="icon nav-icon-plants"></i> The Culture</a>
							<ul id="menu-3" data-dropdown-content="" class="large f-dropdown content row" aria-hidden="true">
								<li><a href="<?=get_permalink(18)?>">Salon</a></li>
								<li><a href="<?=get_permalink(19)?>">Talent</a></li>
								<li><a href="<?=get_permalink(20)?>">Blog</a></li>
								<li><a href="<?=get_permalink(21)?>">Events</a></li>
							</ul>
						</li>
						<li><a href="<?=get_permalink(22)?>"><i class="icon nav-icon-flip-flops"></i> Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
		  </div>
		</div>
	</header>

	<!-- mobile menu -->
	<div class="sticky show-for-small-only">
		<nav class="top-bar" data-topbar data-options="back_text:<< Back" role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="/">Utopia Salon & Day Spa</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a><span>Menu</span></a></li>
			</ul>

			<section class="top-bar-section">
				<ul>
					<li class="has-dropdown">
						<a href="<?=get_permalink(5)?>"><i class="icon nav-icon-scissors"></i> The Essentials</a>
						<ul class="dropdown">
							<li><a href="<?=get_permalink(6)?>">Hair Care</a></li>
							<li><a href="<?=get_permalink(7)?>">Nail Care</a></li>
							<li><a href="<?=get_permalink(8)?>">Retail Products</a></li>
							<li><a href="<?=get_permalink(9)?>">Specials</a></li>
							<li><a href="<?=get_permalink(10)?>">Gift Certificates</a></li>
							<li><a href="<?=get_permalink(11)?>">Appointments</a></li>
						</ul>
					</li>
					<li class="has-dropdown">
						<a href="<?=get_permalink(12)?>"><i class="icon nav-icon-rocks"></i> The Experience</a>
						<ul class="dropdown">
							<li><a href="<?=get_permalink(13)?>">Massage</a></li>
							<li><a href="<?=get_permalink(14)?>">Treatments</a></li>
							<li><a href="<?=get_permalink(15)?>">Skin Care</a></li>
							<li><a href="<?=get_permalink(16)?>">Packages</a></li>
						</ul>
					</li>
					<li class="has-dropdown">
						<a href="<?=get_permalink(17)?>"><i class="icon nav-icon-plants"></i> The Culture</a>
						<ul class="dropdown">
							<li><a href="<?=get_permalink(18)?>">Salon</a></li>
							<li><a href="<?=get_permalink(19)?>">Talent</a></li>
							<li><a href="<?=get_permalink(20)?>">Blog</a></li>
							<li><a href="<?=get_permalink(21)?>">Events</a></li>
						</ul>
					</li>
					<li><a href="<?=get_permalink(22)?>"><i class="icon nav-icon-flip-flops"></i> Contact</a></li>					
				</ul>
			</section>
		</nav>
	</div>
