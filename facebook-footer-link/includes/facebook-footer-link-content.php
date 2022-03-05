<?php

  function ffl_add_footer($content) {

    $content .= '<hr>';
    $content .= '<div class="facebook-footer-link">';
    $content .= '<span class="dashicons dashicons-facebook"></span>Find me On <a href="https://facebook.com" target="_blank">Facebook</a></p>';
    $content .= '</div>';
    return $content;
  }

  add_filter('the_content', 'ffl_add_footer');

