<?php
function custom_enqueue_scripts()
{
  // * STYLES * (chargés dans le <head>)

  // Bootstrap 5 style
  wp_register_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', false, '5.2.3', null);
  wp_enqueue_style('bootstrap5');

  wp_register_style('bootstrap5-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"', false, '1.10.3', null);
  wp_enqueue_style('bootstrap5-icon');
  
  // custom style
  wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', false, '1.0.0', null);
  wp_enqueue_style('custom');


  // * SCRIPTS * (chargés dans le <footer> sauf exception)

  // remove jQuery 3.6.1 présent dans /wp-include
  wp_deregister_script('jquery');
  // Ajoute la dernière version de jQuery depuis un CDN et le charge dans <head>
  wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', false, '3.6.3', false);
  wp_enqueue_script('jquery');

  // script Bootstrap5 Bundle
  wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false, '5.2.3', true);
  wp_enqueue_script('bootstrap5');

// script Bootstrap5 Lightbox
  wp_register_script('bs5-lightbox', 'https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js', false, '1.8.2', true);
  wp_enqueue_script('bs5-lightbox');


  // custom script
  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, '1.0.0', true);
  wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 100);