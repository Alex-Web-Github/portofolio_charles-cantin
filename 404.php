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
      </div>
    </nav>

    <!-- affichage de la Bannière -->
    <section class="container-lg gx-0 my-2 mt-md-5" id="banner">
      <div class="text-center py-4 px-3">
        <h1>Ouups ! La page que vous recherchez n'existe pas</h1>
        <hr>
      </div>
    </section>
    <!-- affichage de la Bannière -->
  </header>
  <!-- affichage du HEADER -->

  <!-- affichage du CONTENU -->
<main>
  <section class="container-lg gx-0">
    <!-- Le chapeau -->
    <div class="row text-center px-2 py-5 mb-md-3">
        <h2 class="col col-md-8 mx-auto lead">
      Il semblerait qu'il n'y ait aucun résultat pertinent associé à votre recherche
        </h2>
    </div>
    <!-- Le chapeau -->

    <div class="row mx-auto mb-5">  
        <div class="col-12 py-4 d-flex justify-content-center">
            <a class="btn btn-primary" 
            href="<?php echo home_url(); ?>">Retour à l'accueil</a>
            
        </div>
    </div>

  </section>
</main>

<?php get_footer(); ?>