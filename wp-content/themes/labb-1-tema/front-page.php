<?php
get_header(); /* kallar på header */
?>

<?php while (have_posts()) { //startar loopen för content
            the_post();?>


<main> 
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">           
						<img src="<?php the_post_thumbnail_url(); ?>" alt="stad" style="width:100%;">
                        <?php the_content();?>
								<div class="text">
									<h2><?php get_the_title();?></h2>
								</div>
							</div>
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