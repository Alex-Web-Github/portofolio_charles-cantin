<!doctype html>
<html class="h-100" lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
  <?php wp_head(); ?>

  <!-- Intégration image de fond ("image à la une" de la page d'accueil) -->
  <style>
    #heroe {
      background-image:
        linear-gradient(to bottom, rgba(0, 0, 10, 0.4), rgba(0, 0, 10, 0.9)),
        url("<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
  <!-- Intégration image de fond ("image à la une" de la page d'accueil) -->
</head>

<body class="h-100">
  <div class="container-fluid d-flex h-100 p-2 flex-column" id="heroe">
    <!-- affichage du HEADER -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-lg">
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
          <div class="collapse navbar-collapse container" id="main-menu">
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
                <a class="text-muted" href="#" target="_blank">
                  <i class="bi bi-instagram"></i></a>
              </li>
              <li class="px-2">
                <a class="text-muted" href="#" target="_blank"><i class="bi bi-facebook"></i></a>
              </li>
            </ul>
            <!-- affichage du Social ICONS -->

          </div>
          <!-- affichage du Collapse Wrapper -->

        </div>
      </nav>
    </header>
    <!-- affichage du HEADER -->

    <!-- affichage du CONTENU -->
    <section class="container-lg d-flex justify-content-center align-items-center h-100" id="content-heroe">
      <div class="text-center py-5 px-3">
        <h1 class="d-inline-flex px-0 mb-0"><?php the_field('page_titre_accueil') ?></h1><span>,</span>
        <h2><?php the_field('page_chapeau'); ?></h2>
      </div>
    </section>
    <!-- affichage du CONTENU -->

    <!-- affichage du FOOTER -->
    <div class="container-fluid">
      <footer class="container-lg px-2 py-3 d-flex flex-column flex-sm-row justify-content-sm-between align-items-center">
        <div class="d-flex align-items-center">
          <a href="<?php echo home_url(); ?>" class="me-2 text-decoration-none ">
            <i class="bi bi-camera mx-1"></i>
            <span style="font-family: Nova Mono, monospace;"><?php bloginfo('name'); ?></span>
          </a>
          <span class="text-muted">|&emsp;2022-<?php echo date('Y'); ?></span>
        </div>
        <div class="d-flex mt-2 mt-sm-0 text-muted">
          <span class="small me-1">un site AlexCréationWeb</span>
          <i class="bi bi-tools"></i>
        </div>
        <div class="d-flex mt-2 mt-sm-0">
          <a class="text-decoration-none" href="<?php echo admin_url(); ?>">
            <span class="small me-1">Admin.</span>
            <i class="bi bi-box-arrow-in-right"></i>
          </a>
        </div>
      </footer>
    </div>
    <!-- affichage du FOOTER -->

  </div>

  <?php wp_footer(); ?>

</body>

</html>