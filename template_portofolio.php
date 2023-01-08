<?php

/**
 * Template Name: Page Galerie/Portofolio avec filtres
 */
?>

<?php get_header(); ?>

<main>
  <section class="container-lg">
    <!-- Affichage du CHAPEAU -->
    <div class="text-center py-5 px-3 mb-md-3">
      <h2 class="lead"><?php the_field('page_chapeau'); ?></h2>
    </div>
    <!-- Affichage du CHAPEAU -->

    <!-- Affichage du FILTRE -->
    <div class="row mb-4 text-center">
      <div class="col-md-6 btn-group mx-auto filtres" role="group">
        <!-- le bouton du filtre TOUS -->
        <a href="#all" class="btn btn-outline-primary active">Tous</a>
        <!-- le bouton du filtre TOUS -->

        <!-- création des boutons du filtre avec les Taxonomies du CPT Portofolio -->
        <?php
        $cats = get_terms(array(
          'taxonomy' => 'categorie',
          'hide_empty' => true, // 'false' pour afficher la liste complète même si aucun cliché n'existe dans cette catégorie.
        ));
        foreach ($cats as $cat) {
        ?>
          <a href="#<?php echo $cat->name; ?>" class="btn btn-outline-primary"><?php echo $cat->name; ?></a>
        <?php
        } ?>
        <!-- création des boutons du filtre avec les Taxonomies du CPT Portofolio -->

      </div>
    </div>
    <!-- Affichage du FILTRE -->

    <!-- Affichage du CPT 'Portofolio' -->
    <?php
    $args = array(
      'post_type' => 'portofolio',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $q = new WP_Query($args);

    // Déclaration de variable facultative 
    //$terms = get_the_terms($post->ID, 'categorie');
    ?>

    <div class="row mb-4 row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php if ($q->have_posts()) : ?>
        <!-- the loop -->
        <?php while ($q->have_posts()) : $q->the_post(); ?>
          <div class="col">

            <?php 
            // pour visualiser les données de cette variable
            // var_dump (get_the_terms($post->ID, 'categorie')[0]); 
            ?>

            <a href="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" 
            data-filtre="<?php echo get_the_terms($post->ID, 'categorie')[0]->name; ?>" 
            class="projet" data-toggle="lightbox" data-gallery="best_of" data-caption="<?php the_field('portofolio_description'); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>" class="content-shadow rounded-1 img-fluid" />
            </a>  
          </div>

        <?php endwhile; ?>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php echo 'Désolé, aucun cliché dans le Portofolio n\'est défini'; ?></p>
      <?php endif; ?>

    </div>
    <!-- Affichage du CPT 'Portofolio' -->

  </section>

</main>

<?php get_footer(); ?>