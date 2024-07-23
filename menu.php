<?php
/*
Plugin Name: Red Sunflower Menu
Plugin URI: https://www.theredsunflower.com
Description: Mobile Menu plugin made for Red Sunflower websites
Author: Jessica Patterson
Version: 2.0.0
Author URI: https://www.theredsunflower.com
License: GNU General Public License
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//load mobile menu
add_action('wp_enqueue_scripts','rs_menu_enqueue');
function rs_menu_enqueue() {
	wp_enqueue_script('rs_menu_script', plugin_dir_url(__FILE__).'menu.js', '', '', true);
}
//load stylesheet
function loadRsMenuCSS() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'rs_menu_style', $plugin_url . 'style.css' );
}
add_action( 'wp_enqueue_scripts', 'loadRsMenuCSS' );

//add new shortcode called rs_button to display menu
add_shortcode('rs_button', 'render_rs_button');

//add new shortcode called rs_menu to display menu
add_shortcode('rs_menu', 'render_rs_menu');

//this is what is displayed when thise rs_button shortcode is used
function render_rs_button() { ?>
		<!-- menu icon-->
		<a href="javascript:void(0);" class="menu-icon" onclick="rs_menu_toggle()">
    		<img id="rs_menu_icon" src="<?php echo get_template_directory_uri(); ?>/menu.png">
  		</a>
<?php
}

//this is what is displayed when thise rs_menu shortcode is used
function render_rs_menu() { ?>
	<div id="rs_menu">
  		<div id="rs_menu_links">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</div>

	</div>
<?php
}
?>