<?php /*Template Name: Biography Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="jumbotron" <?php $image = get_field('background_image'); ?> style="background:url(<?php echo $image['url']; ?>)">
	<div class="container">
	<div class="row">
		<div class="biography">
			<h1>Biography</h1>
			<p class="biography-copy">
				<span class="bonita-green">BonitaBasics</span>
					<?php $biography_text = get_field('biography_text'); echo $biography_text;?>							
			</p>
		</div><!-- End biography -->
		</div><!-- End row -->
		<div class="row">
			<div class="col-xs-3 col-sm-3">
				<h3>Affiliations</h3>
					<ul>
					Park and Wreck Collective
				</ul>
				<ul>
					sp da iLL kid
				</ul>
					<ul>
					Veks
					</ul>
					<ul>
					Loki
					</ul>
					<ul>	
					Tec								
					</ul>
			</div>
			<div class="col-xs-3 col-sm-3">
			<h3>Records By BonitaBasics</h3>
				<ul>
					Upcoming –
					The PhattCaps Connection
					Young, Wild & Corrupt
				</ul>
				<ul>
					Released –
					Rap Buddhaz
					by TrueMasterz & Da Shogunz
				</ul>
					<ul>
					A Jam In The Rough
					by DJ Zudo & DJ Truffel The Phunky Phaqir
					</ul>
					<ul>
					Da BlabberMouf LP
					by BlabberMouf
					</ul>
					<ul>									
						From The Top Of The Stack
						by BlabberMouf & DJ Propo’88
					</ul>
			</div>
		</div>
	</div><!-- End Container -->
</div><!-- End Jumbotron -->

<div class="instagram-feed">
	<div class="container-fluid">
		<div class="row">
			<?php echo wdi_feed(array('id'=>'1')); ?>
		</div>
	</div>
		
</div>
