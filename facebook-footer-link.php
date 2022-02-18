<?php

  /**
 * Plugin Name:       Facebook Footer Link
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Display Facebook Link in the footer of the Posts
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Julian Mercado
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wp-plugins
 * Domain Path:       English
 */

// Exit if Accessed Directly
if(!defined('ABSPATH')) {
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');
