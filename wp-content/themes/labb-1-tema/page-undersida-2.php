<?php
get_header(); /* kallar på header */
?>

<?php while (have_posts()) { //startar loopen för content
            the_post();?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
						<h1><?php the_title()?></h1>
							<p>
							<?php the_content()?>
							</p>
					</div>
						<!-- side stuff -->
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
							<li>
								<?php dynamic_sidebar('side-menu');?>
							</li>
							</ul>
						</aside>
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