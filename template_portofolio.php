<?php

/**
 * Template Name: Page Galerie/Portofolio avec filtres
 */
?>

<?php get_header(); ?>

<main>
  <section class="container-lg">
    <!-- Affichage du chapeau -->
    <div class="text-center py-5 px-3 mb-md-5">
      <h2 class="lead"><?php the_field('page_chapeau'); ?></h2></div>
    <!-- Affichage du chapeau -->
    <?php
    $args = array(
      'post_type' => 'portofolio',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $q = new WP_Query($args); ?>

    <div class="row mb-5 row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <?php if ($q->have_posts()) : ?>
        <!-- the loop -->
        <?php while ($q->have_posts()) : $q->the_post(); ?>
          <!-- Affichage des "Clichés" -->
          <div class="col"> 
              <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-toggle="lightbox"  data-caption="<?php the_content(); ?>" data-footer="<?php the_content(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>" class="content-shadow rounded-1 img-fluid" />
              </a>   
          </div>
          <!-- Affichage des "Clichés" -->

        <?php endwhile; ?>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php echo 'Désolé, aucun cliché dans le Portofolio n\'est défini'; ?></p>
      <?php endif; ?>

    </div>
    
  </section>
</main>
<?php get_footer(); ?>