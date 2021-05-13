<?php
get_header(); /* kallar på header */
?>

<?php while (have_posts()) { //startar loopen för content
            the_post();?>
<main>
						
						<section>
							<div class="container">
								<div class="row">
									<div id="primary" class="col-xs-12 col-md-9">
										<h1>Blogg</h1>
										<article>
                                            <img src="<?php
                                        the_post_thumbnail_url(); ?>" /> <!-- hämtar bild -->
                            <h2 class="title">
                                <a href=""><?php the_title(); ?></a> <!-- hämtar titeln -->
                            </h2>

                            <ul class="meta">
                                <li>Datum:</li>
                                <li><a href=""><?php the_date(); ?></a></li> <!-- hämtar datum -->
                                <li>Författare:</li>
                                <li><a href=""><?php the_author(); ?></a></li> <!-- hämtar författaren -->
                                <li>Kategori:</li>
                                <li><a href=""><?php the_category('<a>, '); ?></a></li> <!-- hämtar kategorin -->
                            </ul>
                            <p><?php the_content(); ?></p> <!-- hämtar texten i inlägget -->	
										</article>
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