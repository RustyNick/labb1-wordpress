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
                                            ?>"><?php the_title(); // postens titel?></a></h2>
                            <div class="meta">

                                <ul class="meta">
                                    <li class="fa fa-calendar"></li>
                                    <li><a href=""><?php the_date(); ?></a></li> <!-- datum --> 
                                    <li class="fa fa-user"></li>
                                    <li><a href=""><?php the_author_posts_link(); ?></a></li> <!--  författaren -->
                                    <li class="fa fa-tag"></li>
                                    <li><a href=""><?php the_category('<a>, '); ?></a></li> <!--  kategorin -->
                                </ul>

                                <p><?php the_excerpt(); ?></p> <!-- texten i inlägget -->
                            </div>
											<h2 class="title">
											
											</h2>
											
											
										</article>
									</div>
									<aside id="secondary" class="col-xs-12 col-md-3">
								<div id="sidebar">
								<!-- search form -->
								<ul role="navigation">
									<li class="pagenav">
										<!-- kort meny -->
						                <?php dynamic_sidebar('aside-top');?>
									</li>
									<li>
										<!-- kort arkiv -->
						            <?php dynamic_sidebar('aside-middle');?>

									</li>
									<li class="categories">
										<!-- Kategorier -->
						            <?php dynamic_sidebar('aside-bottom');?>

											</li>
										</ul>
									</li>
								</ul>
							</div>
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