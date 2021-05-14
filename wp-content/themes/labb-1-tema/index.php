<?php

get_header();

if (have_posts() ) {
    while ( have_posts() ) {

        the_post();        
?>
        <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero">
                            <div class="text">
                            <?php the_title();?>
                          <p>
                          <?php the_content(); ?>
                          </p>
                        </div>
                        </div>
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
