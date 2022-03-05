<?php

 /**
 * Plugin Name:       My Custom Dashboard
 * Plugin URI:        https://example.com/plugins/customDashboard/
 * Description:       Create a custom WP Dashboard.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Julian Mercado
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wp-plugins.local
 * Domain Path:       /languages
 */

  // Exit if Accessed Directly
  if(!defined('ABSPATH')) {
    exit;
  }

  class My_Example_Plugin {
    private static $instance;

    public static function getInstance() {
      if(self::$instance == NULL) {
        self::$instance == new self();
      }
      return self::$instance;
    }

    private function __construct() {
      //Hooks go here
      remove_action('welcome_panel', 'wp_welcome_panel');
      add_action('welcome_panel', array($this, 'welcome_panel') );
      add_action('admin_enqueue_scripts', array($this, 'add_scripts'));
    }

    function welcome_panel() { 
    
  ?>
      
    <div class="welcome-panel-content">
      <div class="welcome-header">
        <h3><?php _e( 'Welcome to my Custom Dashboard WordPress Box!' ); ?></h3>
      </div>
      <div class="welcome-text-message">
        <p class="welcome-message"><?php _e( 'This Welcome message is customized from a custom plugin' ); ?></p>
      </div>
    </div>
      
  <?php }

    function add_scripts() {
      wp_register_style('my-example-plugin', plugins_url('dashboard-banner/css/my-example-plugin.css') );
      wp_register_script( 'my-example-plugin', plugins_url('dashboard-banner/js/my-example-plugin.js') );
      wp_enqueue_style('my-example-plugin');
      wp_enqueue_script('my-example-plugin');
    }

  }

 My_Example_plugin::getInstance();
