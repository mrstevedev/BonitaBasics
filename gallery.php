<?php /*Template Name: Gallery Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<header>
	<h2>Gallery</h2>
</header>

	<div class="gallery">
		<div class="container-fluid">
			<div class="row no-gutters image-gallery">
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="https://unsplash.it/400/500" alt="">
				</div>
			</div>
		</div>
	</div>
