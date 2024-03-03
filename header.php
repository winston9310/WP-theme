<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php the_title(); ?></title>
    <!-- llamamos recursos externos -->
    <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>\style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url' ); ?>\app.js"></script>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <!-- Start: Navbar Centered Links -->
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>WordPress-theme</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
   
<!-- declaramos el menu para WP y sustituimos por el de HTML -->
   <?php wp_nav_menu(array(
        'theme_location' => 'superior',
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navcol-1',
        'items_wrap' => '<ul class="navbar-nav mx-auto">%3$s</ul>',
        'menu_class' => 'nav-item',
        'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
    )); ?>

        </div>
    </nav><!-- End: Navbar Centered Links -->
    

    <header class="pt-5">
        <!-- Start: Hero Clean Reverse -->
        <div class="container pt-4 ">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold mb-5"><span class="underline"><?php the_title(); ?>.</span></h1>
                    </div>
                </div>
            </div>
        </div><!-- End: Hero Clean Reverse -->
    </header>