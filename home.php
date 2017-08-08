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
				<li class="hvr-underline-reveal"><a href="#" class="sectionTwoBtn1">Tha Basics</a></li>
				<li class="hvr-underline-reveal"><a href="#" class="sectionThreeBtn1">Rack 'Em Up Records</a></li>
				<li class="hvr-underline-reveal"><a href="#section4" class="sectionFourBtn1">Production Inquiries</a></li>
			</ul>
		</div>
		
	</div>
	<!-- <div
	class="fb-like"
	data-share="true"
	data-width="450"
	data-show-faces="true">
	</div> -->
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-right-flex">	
				<h1 class="bonita-green">Tha Basics</h1>
				<p>This section will be about BonitaBasics and what the Bonita Vibe is all about, from living in Bonita, to the visuals, to the record collecting, and to the music making process.</p>
			</div>
		</div>

	<div class="svg-arrows">
		<svg class="arrows-black">
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
			<h1>Rack 'Em Up Records</h1>
				<p>Rack 'Em Up records is a label started by Marvalous Tha Duke. More info here about Rack 'Em Up Records. Logo Coming Soon.</p>
				<button class="btn btn-primary hvr-sweep-to-right">Check This Out</button>
		</div>
	</div>

	<div class="svg-arrows">
		<svg class="arrows-black">
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<h1>Production Inquiries</h1>
				<p>Got a project you want me to be a part of? Get in touch.</p>		
				<p><strong>Email:</strong> <a class="production-inquiry" href="#">production@bonitabasics.com</a></p>	
					
			</div>
		</div>
	</div>

</section>
<div class="back-to-top">
	<a href="#0" class="backtotopBtn cd-top">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
</div>

