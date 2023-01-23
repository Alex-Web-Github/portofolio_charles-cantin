<?php

/**
 * Template Name: Page de Contact
 */
?>

<?php get_header(); ?>

<main>
  <section class="container-lg">
    <!-- Le chapeau -->
    <div class="row text-center mx-0 mb-md-3 px-2 py-5">
      <h2 class="col col-md-8 mx-auto lead"><?php the_field('page_chapeau'); ?></h2>
    </div>
    <!-- Le chapeau -->

    <div class="row mx-0 mb-5">
      <!-- Portrait du photographe -->
      <div class="col-md-4 my-3 text-center">
        <img src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>" class="img-fluid" style="border-radius: 0.25rem; " alt="autoportrait de Charles Cantin">
      </div>
      <!-- Portrait du photographe -->

      <!-- Formulaire de Contact -->
      <div class="col-md-8 p-2" id="contact">
        <form class="row m-0" action="https://formspree.io/f/myyayknl" method="POST">
          <div class="col-md-6 p-2">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" name="firstName" class="form-control" id="firstName">
          </div>
          <div class="col-md-6 p-2">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" name="lastName" class="form-control" id="lastName">
          </div>
          <div class="col-md-6 p-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="col-md-6 p-2">
            <label for="subject" class="form-label">Objet</label>
            <input type="text" name="subject" class="form-control" id="subject">
          </div>
          <div class="col-12 p-2">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>
          <div class="col-12 p-2">
            <div class="form-check">
              <input class="form-check-input" name="gridCheck" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Je consens au traitement de mes données personnelles aux fins de gestion de ma demande. Je suis informé(e) de mon droit de retirer mon consentement à ce traitement à tout moment.
              </label>
            </div>
          </div>
          <div class="col-12 py-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Envoyer mon message</button>
          </div>

        </form>

      </div>
      <!-- Formulaire de Contact -->

    </div>

  </section>

</main>

<?php get_footer(); ?>