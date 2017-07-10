<?php /*Template Name: Gallery Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<style>

#imagelightbox
{
    position: fixed;
    z-index: 9999;
 
    -ms-touch-action: none;
    touch-action: none;
}
</style>

<div class="col-sm-12">
	<div class="container">
		<h2>gallery</h2>
		<a href="#" data-imagelightbox="c">			
			<img src="https://unsplash.it/500/500" id="imagelightbox" />
		</a>
	</div>
</div>
