<?php /*Template Name: Biography Template */ ?>
<div class="jumbotron" <?php $image = get_field('background_image'); ?> style="background:url(<?php echo $image['url']; ?>)">
	<div class="container">
	<div class="row">
		<div class="biography">
			<h1>Biography</h1>
			<p class="biography-copy">
				<!-- <span class="bonita-green">BonitaBasics</span> -->
					<?php $biography_text = get_field('biography_text'); echo $biography_text;?>							
			</p>
		</div><!-- End biography -->
		</div><!-- End row -->
		<div class="row">
			<div class="col-xs-3 col-sm-3">
				<h3>Affiliations</h3>
					<ul class="affiliations biography-list">
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Park and Wreck Collective</li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>sp da iLL kid</li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Veks</li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tec</li>
					</ul>
			</div>
			<div class="col-xs-3 col-sm-3">
			<h3>Records By BonitaBasics</h3>
			<ul class="record-releases biography-list">
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Upcoming – The PhattCaps Connection Young, Wild & Corrupt</li>
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Released – Rap Buddhaz by TrueMasterz & Da Shogunz</li>
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>A Jam In The Rough by DJ Zudo & DJ Truffel The Phunky Phaqir</li>
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>Da BlabberMouf LP by BlabberMouf</li>
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i>From The Top Of The Stack by BlabberMouf & DJ Propo’88</li>
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
