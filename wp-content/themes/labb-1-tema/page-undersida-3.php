<?php
get_header(); /* kallar på header */
?>

<?php while (have_posts()) { //startar loopen för content
            the_post();?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
						<h1><?php the_title()?></h1>
							<p>
							<?php the_content()?>	
							</p>
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