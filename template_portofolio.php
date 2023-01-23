<?php

/**
 * Template Name: Page Galerie/Portofolio avec filtres
 */
?>

<?php get_header(); ?>

<main>
  <section class="container-lg">
    <!-- Affichage du CHAPEAU -->
    <div class="row text-center px-2 py-5 mb-md-3">
      <h2 class="col col-md-8 mx-auto lead"><?php the_field('page_chapeau'); ?></h2>
    </div>
    <!-- Affichage du CHAPEAU -->

    <!-- Affichage du FILTRE -->
    <div class="row mx-0 mb-5 px-2 text-center" id="filter">
      <div class="col mx-auto filtres" role="group">
        <ul class="list-group list-group-horizontal">
          <!-- le bouton du filtre TOUS -->
          <li href="#all" class="list-group-item flex-fill active">Tous</li>
          <!-- le bouton du filtre TOUS -->
          <!-- création des boutons du filtre avec les Taxonomies du CPT Portofolio -->
          <?php
          $cats = get_terms(array(
            'taxonomy' => 'categorie',
            'hide_empty' => true, // 'false' pour afficher la liste complète même si aucun cliché n'existe dans cette catégorie.
          ));
          foreach ($cats as $cat) {
          ?> 
          <li href="#<?php echo $cat->name; ?>" class="list-group-item flex-fill" data-bs-toggle="list"><?php echo $cat->name; ?></li>
          <?php
          } ?>
          <!-- création des boutons du filtre avec les Taxonomies du CPT Portofolio -->
        </ul>
      </div>
    </div>
    <!-- Affichage du FILTRE -->

    <?php
    $args = array(
      'post_type' => 'portofolio',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $q = new WP_Query($args);

    ?>
    <!-- Affichage du CPT 'Portofolio' -->
    <div class="row mt-4 mb-5 row-cols-2 row-cols-md-3 g-0" id="portofolio">
      <?php if ($q->have_posts()) : ?>
        <!-- the loop -->
        <?php while ($q->have_posts()) : $q->the_post(); ?>
          <div class="col p-1">
            <a href="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" 
            data-filtre="<?php echo get_the_terms($post->ID, 'categorie')[0]->name; ?>" 
            class="projet" data-toggle="lightbox" data-gallery="best_of" data-caption="<?php the_field('portofolio_description'); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>"  class="rounded-1 img-fluid" />
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