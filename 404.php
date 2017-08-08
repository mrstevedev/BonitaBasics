<?php get_template_part('templates/page', 'header'); ?>

<div class="message-container animated fadeIn">
  <?php _e('<p>Sorry, but the page you were trying to view does not exist.<br><span>But yo, check out some rare jazz records from the collection.</span></p>', 'sage'); ?>
  <div class="404-image">
    <img src="<?php bloginfo('url')?>/wp-content/uploads/2017/08/142534319.jpg" alt="Vinyl Records" class="404-image">
  </div>
</div>

<?php //get_search_form(); ?>
