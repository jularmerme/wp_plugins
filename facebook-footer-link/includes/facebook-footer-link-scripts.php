<?php

  function ffl_add_scripts() {
    wp_enqueue_style('ffl-main-style', plugins_url() . '/facebook-footer-link/css/style.css');
    wp_enqueue_script('fll-main-script', plugins_url() . '/facebook-footer-link/js/script.js');
  }

  add_action('wp_enqueue_scripts', 'ffl_add_scripts');