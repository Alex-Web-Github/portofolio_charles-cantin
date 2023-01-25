<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menu('main-menu', 'Main menu');
add_action('after_setup_theme', 'custom_image_sizes');
function custom_image_sizes()
{
  add_image_size('image-1920px-wide', 1920); // redéfinit la taille maxi des images importées dans WP au lieu de la taille 'full'
}