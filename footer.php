<!-- affichage du CONTENU -->

<!-- affichage du FOOTER -->
<div class="container-fluid bg-dark">
  <footer class="container-lg gx-0 px-2 py-3 d-flex flex-column flex-sm-row justify-content-sm-between align-items-center">
    <div class="d-flex align-items-center">
      <a href="<?php echo home_url(); ?>" class="me-2 text-muted text-decoration-none ">
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
      <a class="text-muted text-decoration-none" href="<?php echo admin_url(); ?>">
        <span class="me-1">Admin.</span>
        <i class="bi bi-box-arrow-in-right"></i>
      </a>
    </div>
  </footer>
</div>
<!-- affichage du FOOTER -->

<?php wp_footer(); ?>

</body>

</html>