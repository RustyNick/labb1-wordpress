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
										<article>

										<img src="<?php
                                        the_post_thumbnail_url(); ?>" /> <!-- hämtar bild -->
                            <h2 class="title">
                                <a href="<?php the_permalink() //postens permalänk 
                                            ?>"><?php the_title(); // postens titel
                                                                                                    ?></a>
                            </h2>
                            <div class="meta">

                                <ul class="meta">
                                    <li>Datum:</li>
                                    <li><a href=""><?php the_date(); ?></a></li> <!--  datum -->
                                    <li>Författare:</li>
                                    <li><a href=""><?php the_author(); ?></a></li> <!--  författaren -->
                                    <li>Kategori:</li>
                                    <li><a href=""><?php the_category('<a>, '); ?></a></li> <!--  kategorin -->
                                </ul>

                                <p><?php the_content(); ?></p> <!-- texten i inlägget -->
                            </div>
											<h2 class="title">
											
											</h2>
											
											
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