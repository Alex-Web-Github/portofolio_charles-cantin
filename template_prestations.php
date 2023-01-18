<?php

/**
 * Template Name: Page des tarifs & prestations
 */
?>

<?php get_header(); ?>

<main>
  <section class="container-lg gx-0">
    <!-- Affichage du chapeau -->
    <div class="row text-center px-2 py-5 mb-md-3">
      <h2 class="col col-md-8 mx-auto lead"><?php the_field('page_chapeau'); ?></h2>
    </div>
    <!-- Affichage du chapeau -->
    <?php
    $args = array(
      'post_type' => 'prestations',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $q = new WP_Query($args); ?>

    <div class="row mx-auto mb-5 row-cols-1 row-cols-sm-2 row-cols-lg-3" id="prestations">
      <?php if ($q->have_posts()) : ?>
        <!-- the loop -->
        <?php while ($q->have_posts()) : $q->the_post(); ?>

          <!-- Affichage des "Prestations" -->
          <div class="col p-4">
            <div class="card content-shadow text-center h-100">
              <div>
                <img src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>" class="card-img-top" />
              </div>
              <div class="card-body mb-3">
                <h3 class="card-title fs-4"><?php the_title(); ?></h3>
                <p class="card-text fw-light">
                  <?php the_field('prestation_description'); ?>
                </p>
              </div>
              <div class="d-flex px-1 card-footer align-items-center">
                <!-- Boucle IF sur le champs 'prestation_tarif' pour affichage tarif ou "selon devis" -->
                <?php
                $price = get_field('prestation_tarif');
                if (!empty($price)) : ?>
                  <div class="col"><?php echo ($price); ?> Euros</div>
                <?php
                else : ?>
                  <div class="col">selon devis</div>
                <?php endif; ?>
                <!-- Boucle IF sur le champs 'prestation_tarif' pour affichage tarif ou "selon devis" -->
                <div class="col py-2">
                  <a href="<?php echo get_the_permalink(12); ?>" class="btn btn-primary"><?php the_field('prestation_texteBouton'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Affichage des "Prestations" -->

        <?php endwhile; ?>
        <!-- end of the loop -->
        <?php wp_reset_postdata(); ?> // Utile pour réinitialiser '$post' à la fin de la boucle WPQuery

      <?php else : ?>
        <p><?php echo 'Désolé, aucune prestation n\'est définie'; ?></p>
      <?php endif; ?>

    </div>

  </section>
</main>
<?php get_footer(); ?>