<?php
get_header(); /* kallar på header */
?>

<?php while (have_posts()) { //startar loopen för content
            the_post();?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<h1><?php the_title()?></h1>
							<p>
							<?php the_content()?>
							</p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
						<img src="<?php the_post_thumbnail_url()?>" />

						</div>
					</div>
				</div>
			</section>
		</main>

<?php
} //avslutar loopen
?>
</div>


<?php
get_footer(); /* kallar på footer */
?>