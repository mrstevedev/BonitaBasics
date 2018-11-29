<?php /*Template Name: Home Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<section class="section-1">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-logo">
			<h1>BONITA<span class="bonita-green">BASICS</span></h1>
			<ul class="hero-nav">
				<li class="hvr-underline-reveal"><a href="#" class="sectionTwoBtn1mid">The Basics</a></li>
				<li class="hvr-underline-reveal"><a href="#" class="sectionThreeBtn2mid">Recent Projects</a></li>
				<li class="hvr-underline-reveal"><a href="#" class="sectionFourBtn2mid">Production Inquiries</a></li>
			</ul>
		</div>
	</div>

	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionTwoBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
			</a>
		</svg>
	</div>
	</div>
</section>

<section class="section-2">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 section-about">					
				<h2>About</h2>
				<p>Bonita Basics is from Bonita California. Bonita grew up listening to old school mid 90’s boom bap and is inspired to continue to create the music that he has listened to and is inspired by.</p>
				<p><span class="name-hilite">Photo by: sp da iLL kid</span></p>
			</div>
		</div>

	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionThreeBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
		</a>
		</svg>
	</div>
	</div>

</section>

<section class="section-3">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-5 inquiry-container">
				<h1>Yo! How Can I Listen?<span class="hilite"></span></h1>
				<p>Not a problem we have links for you to check out some music.</p>
				<ul class="listen-list">
					<li><a href="#!">Listen on SoundCloud for the latest music.</a></li>
					<li><a href="#!">View latest music videos on YouTube</a></li>
					<li><a href="#!">Connect on Facebook.</a></li>
				</ul>
			</div>
		</div>

	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionFourBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
			</a>
		</svg>
	</div>
	</div>

</section>

<section class="section-4">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-5 inquiry-container">
				<h1>Production <span class="hilite">Inquiries</span></h1>
				<p>Got a project you want me to be a part of? Get in touch.</p>
				<p><strong>Email</strong> <a class="production-inquiry" href="#">production@bonitabasics.com</a></p>
			</div>
		</div>
	</div>

</section>
<div class="back-to-top">
	<a href="#0" class="backtotopBtn cd-top">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
</div>
