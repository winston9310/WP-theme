<?php
/*
Nombre de la plantilla: Archive
*/
get_header(); ?>
<section ><h1> Category:<?php $current_category = single_cat_title("", true); ?></h1></section>
<div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <!--features IMG config -->
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col">
                        <div class="card border-light border-1 d-flex justify-content-center p-4">
                            <div class="card-body">
                            
                                
                                <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid mb-2' ));
                                } ?></a>
                                <div>
                                    <!--post config -->
                                    <a class="link" href="<?php the_permalink(); ?>"><h4 class="fw-bold"><?php the_title(); ?></h4></a>
                                    <small><?php the_author(); ?></small>
                                    <p class="text-muted"><?php the_excerpt(); ?></p><button class="btn btn-sm px-0" type="button">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg><br></button>
                                    <div class="card-footer"><small class="text-muted"><?php the_category(', '); ?></small>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>                
               <?php endwhile; endif; ?>
               <!-- end post config --> 
            </div>
        </div>


<?php get_footer(); ?>