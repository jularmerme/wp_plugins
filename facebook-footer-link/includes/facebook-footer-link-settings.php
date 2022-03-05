<?php

  // Create menu link
  function ffl_options_menu_link() {
    add_options_page(
      'Facebook Footer Link Options',
      'Facebook Footer Link',
      'manage_options',
      'ffl-options',
      'ffl_options_content'
    );
  }

  // Create option page content
  function ffl_options_content() {
    ob_start();

    global $ffl_options; echo 5 % 0.75; die;
    
?>

<div class="wrap">
  <h2><?php _e('Facebook Footer Link Settings', 'ffl_domain'); ?></h2>
  <p><?php _e('Settings for the Facebook Footer Link plugin', 'ffl_domain'); ?></p>
  <form action="options.php" method="post">
    <?php settings_fields('ffl_settings_group'); ?>
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row">
            <label for="ffl_settings['enable']"><?php _e('Enable', 'ffl_domain'); ?></label>
          </th>
          <td>
            <input id="ffl_settings['enable']" type="checkbox" name="ffl_settings['enable']" value="1" >
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="ffl_settings['facebook_url']"><?php _e('Facebook Profile URL', 'ffl_domain'); ?>
            </label>
          </th>
          <td>
            <input id="ffl_settings['facebook_url']" type="text" name="ffl_settings['facebook_url']" value="<?php echo $ffl_options['facebook_url']; ?>" class="regular-text">
            <p class="description"><?php _e('Enter your Facebook Profile URL', 'ffl_domain'); ?></p>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>

<?php

    echo ob_get_clean();

  }

  add_action('admin_menu', 'ffl_options_menu_link');


  //Register Settings
  function ffl_register_settings() {
    register_setting('ffl_settings_group',  'ffl_settings');
  }

  add_action('admin_init', 'ffl_register_settings');