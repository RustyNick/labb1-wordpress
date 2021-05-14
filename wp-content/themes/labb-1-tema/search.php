<?php

get_header();?>

<main>
    <section>
							<div class="container">
								<div class="row">
									<div id="primary" class="col-xs-12 col-md-9">

<?php
if (have_posts() ) {?>
 <h1 class="search-title">
<?php echo $wp_query->found_posts; ?> <?php _e( 'Sökresultat för', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h1>
							<div class="searchform-wrap">
    <?php get_search_form();?>
    </div>
    <?php
    while ( have_posts() ) {
               the_post();        
?>

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
								</div>
							</div>
						</section>			
						
					</main>

<?php

    }
} else {
   echo 'Finns inget att visa här';
}

get_footer();

?>