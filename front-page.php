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
        url("<?php echo get_the_post_thumbnail_url('','medium_large'); ?>");
      background-position: center-center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      color: whitesmoke;
    }
  </style>
  <!-- Intégration image de fond ("image à la une" de la page d'accueil) -->
</head>

<body class="h-100">

  <div class="container-fluid d-flex h-100 p-3 flex-column" id="heroe">
    <!-- affichage du HEADER -->
    <header> 
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-lg" >

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
                  <i class="bi bi-instagram" style="font-size: 1.5rem; color: #F0F2A6;"></i></a>
              </li>
              <li class="px-2">
                <a class="text-muted" href="#" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem; color: #F0F2A6;"></i></a>
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
    <section class="container d-flex justify-content-center align-items-center h-100">
      <div class="text-center py-5 px-3">
        <h1 class="d-inline-flex px-0 mb-0"><?php the_content() ?></h1><span style="color: #F0F2A6; font-size: 3rem">,</span>
        <h2 class="sub-title"><?php the_field('page_chapeau'); ?></h2>
      </div>
    </section>
    <!-- affichage du CONTENU -->

    <!-- affichage du FOOTER -->
    <div class="container-lg">
      <footer class="d-flex flex-column flex-sm-row  justify-content-sm-between align-items-center py-2">
        <div class="d-flex align-items-center">
          <a href="<?php echo home_url(); ?>" class="mb-3 me-3 mb-md-0 text-muted text-decoration-none ">
            <i class="bi bi-camera mx-1"></i>
            <span><?php bloginfo('name'); ?></span>
          </a>
          <span class="mb-3 mb-md-0 text-muted">© 2021-<?php echo date('Y'); ?></span>
        </div>
        <div class="d-flex ">
          <a class="small mb-3 mb-md-0 text-muted text-decoration-none lh-1" 
          href="<?php echo admin_url(); ?>">
            <span class="me-1">Connexion</span>
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