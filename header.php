<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
  <?php wp_head(); ?>

</head>

<body>
  <header>
    <!-- affichage du HEADER -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark p-2">
      <div class="container-lg gx-0">

        <!-- affichage du LOGO -->
        <a href="<?php echo home_url(); ?>" class="d-flex align-items-center pb-3">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-small-sans-fond-charles_cantin.png" alt="logo" class="my-2" style="width: 150px;">
        </a>
        <!-- affichage du LOGO -->

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-start align-items-center">
            <i class="navbar-toggler-icon"></i>
          </span>
        </button>

        <!-- affichage du Collapse Wrapper -->
        <div class="collapse navbar-collapse container-fluid" id="main-menu">
          <!-- affichage du MENU avec le WALKER BOOTSTRAP -->
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'main-menu',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<ul id="%1$s" class="navbar-nav mx-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>
          <!-- affichage du MENU avec le WALKER BOOTSTRAP -->

          <!-- affichage du Social ICONS -->
          <ul class="navbar-nav flex-row">
            <li class="px-2">
              <a class="text-muted" href="" target="_blank">
                <i class="bi bi-instagram"></i></a>
            </li>
            <li class="px-2">
              <a class="text-muted" href="" target="_blank"><i class="bi bi-facebook"></i></a>
            </li>
          </ul>
          <!-- affichage du Social ICONS -->

        </div>
        <!-- affichage du Collapse Wrapper -->

      </div>
    </nav>

    <!-- affichage de la Bannière -->
    <section class="container-lg gx-0 my-2 mt-md-5" id="banner">
      <div class="text-center py-4 px-3">
        <h1><?php the_title(); ?></h1>
        <hr>
      </div>
    </section>
    <!-- affichage de la Bannière -->
  </header>
  <!-- affichage du HEADER -->

  <!-- affichage du CONTENU -->