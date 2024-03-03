<?php get_header(); ?>

<section class="pt-2">
        <!-- Start: Hero Clean Reverse -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container pt-1 pt-xl-2">
            <div class="row pt-5">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"><?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails', array( 'class' => ' img-fluid mb-2' ));
                                } ?></div>
                     <small><?php the_category(', '); ?> | <?php the_author(); ?></small>           
                </div>
                
                <div class="pt-4">
                    <div>                        
                    <?php the_content(); ?>
                    </div>
                </div>  
            </div>

            <!-- Next & Prevuis POst -->   
            <div class="pt-5" style="text-center position-relative">   
            <?php next_post_link() ?> | <?php previous_post_link(); ?>
            </div>
            
        </div>
        <!-- End: Hero Clean Reverse -->
        
        <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?> 