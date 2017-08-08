<?php /*Template Name: Contact Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="jumbotron">
	<div class="container">
		<p>Contact</p>
	</div>
</div>