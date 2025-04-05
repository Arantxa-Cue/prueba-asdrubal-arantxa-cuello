<?php
function asdrubal_tema_scripts() {
  wp_enqueue_style('estilo-principal', get_stylesheet_uri());
  wp_enqueue_script('script-personalizado', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'asdrubal_tema_scripts');

