<?php
/**
 * Template Name: Page de Contact
 */
?>

<?php get_header(); ?>

<main>
  <section class="container mb-4">
    <!-- Le chapeau -->
    <div class="text-center py-5 px-3 mb-md-5">
      <h2 class="lead"><?php the_field('page_chapeau'); ?></h2>
    </div>
    <!-- Le chapeau -->

    <div class="container d-flex flex-md-row flex-column align-items-center justify-content-center mb-4">
      <!-- Portrait du photographe -->
      <div class="col-10 col-md-6 col-lg-4 m-3"> 
        <img src="<?php echo get_the_post_thumbnail_url('','medium'); ?>" class="img-contact" alt="autoportrait de Charles Cantin">  
      </div>
      <!-- Portrait du photographe -->

      <!-- Formulaire de Contact -->
      <div class="col-md-6 col-lg-8 ms-md-3 pt-sm-4">
        <form class="row g-3" action="https://formspree.io/f/myyayknl"
              method="POST">
          <div class="col-md-6">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" name="firstName" class="form-control" id="firstName">
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" name="lastName" class="form-control" id="lastName">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="col-md-6">
            <label for="subject" class="form-label">Objet</label>
            <input type="text" name="subject" class="form-control" id="subject">
          </div>
          <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" name="gridCheck" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
              Je consens au traitement de mes données personnelles aux fins de gestion de ma demande. Je suis informé(e) de mon droit de retirer mon consentement à ce traitement à tout moment. 
              </label>
            </div>
          </div>
          <div class="col-12 py-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-danger">Envoyer mon message</button>
          </div>

        </form>

      </div>
      <!-- Formulaire de Contact -->

    </div>
    
  </section>

</main>

<?php get_footer(); ?>