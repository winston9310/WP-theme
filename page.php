<?php get_header(); ?>
<!-- Start: Hero Grid -->
<section class="py-2 mt-2">
        <!-- Start: Hero Clean Reverse -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container py-2 py-xl-2">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="max-width: 350px;">
                        <!--<h1 class="display-5 fw-bold mb-4"><?php the_title(); ?></h1>-->
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div>
                <?php the_content(); ?>
                </div>
            </div>
        </div><!-- End: Hero Clean Reverse -->
        <?php endwhile; endif; ?>
    </section><!-- End: Hero Grid -->
    <?php get_footer(); ?>    