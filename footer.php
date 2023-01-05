<!-- affichage du CONTENU -->

<!-- affichage du FOOTER -->
<div class="container-fluid bg-dark">
  <footer class="container-lg d-flex flex-column flex-sm-row justify-content-sm-between align-items-center py-2">
    <div class="d-flex align-items-center">
      <a href="<?php echo home_url(); ?>" class="mb-3 me-3 mb-md-0 text-muted text-decoration-none ">
        <i class="bi bi-camera mx-1"></i>
        <span><?php bloginfo('name'); ?></span>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2021-<?php echo date('Y'); ?></span>
    </div>
    <div class="d-flex ">
      <a class="small mb-3 mb-md-0 text-muted text-decoration-none lh-1" href="<?php echo admin_url(); ?>">
        <span class="me-1">Connexion</span>
        <i class="bi bi-box-arrow-in-right"></i>
      </a>
    </div>
  </footer>
</div>
<!-- affichage du FOOTER -->

<?php wp_footer(); ?>

</body>

</html>