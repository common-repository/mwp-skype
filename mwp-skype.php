<?php
/**
 * Plugin Name:       Wow Skype Buttons
 * Plugin URI:        https://wow-estore.com/item/wow-skype-buttons-pro/
 * Description:       Add a Skype button to your WP site!
 * Version:           4.0.4
 * Author:            Wow-Company
 * Author URI:        http://wow-company.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       skype-button
 */

namespace skype_buttons_free;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wow_Plugin' ) ) :

	/**
	 * Main Wow_Plugin Class.
	 *
	 * @since 1.0
	 */
	final class Wow_Plugin {

		private static $_instance;
		/**
		 * @var Wow_Plugin_Admin
		 */
		private $admin;
		/**
		 * @var Wow_Plugin_Public
		 */
		private $public;

		/**
		 * Wow Plugin information
		 *
		 * All information which need for correctly plugin working
		 *
		 * @return array
		 * @static
		 */
		public static function information() {

			$info = array(
				'plugin' => array(
					'name'      => 'Wow Skype Buttons', // Plugin name
					'menu'      => 'Skype Buttons', // Plugin name in menu
					'author'    => 'Wow-Company', // Author
					'prefix'    => 'skype_new', // Prefix for database
					'text'      => 'skype-button',    // Text domain for translate files
					'version'   => '4.0.4', // Current version of the plugin
					'file'      => __FILE__, // Main file of the plugin
					'slug'      => dirname( plugin_basename( __FILE__ ) ), // Name of the plugin folder
					'url'       => plugin_dir_url( __FILE__ ), // filesystem directory path for the plugin
					'dir'       => plugin_dir_path( __FILE__ ), // URL directory path for the plugin
					'shortcode' => 'Skype-Button',
				),
				'url'    => array(
					'author'   => 'https://wow-estore.com/',
					'home'     => 'https://wordpress.org/plugins/plugin/mwp-skype/',
					'support'  => 'https://wordpress.org/support/plugin/mwp-skype/',
					'facebook' => 'https://www.facebook.com/wowaffect/',
				),
				'rating' => array(
					'website'  => 'WordPress.org', // Name site for rating plugin
					'url'      => 'https://wordpress.org/plugins/mwp-skype/',
					'wp_url'   => 'https://wordpress.org/support/plugin/mwp-skype/reviews/#new-post',
					'wp_home'  => 'https://wordpress.org/plugins/mwp-skype/',
					'wp_title' => 'Create custom Skype button',
				),
			);

			return $info;

		}

		/**
		 * Main Wow_Plugin Instance.
		 *
		 * Insures that only one instance of Wow_Plugin exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @return object|Wow_Plugin The one true Wow_Plugin for Current plugin
		 *
		 * @uses      Wow_Plugin::_includes() Include the required files.
		 * @uses      Wow_Plugin::text_domain() load the language files.
		 * @since     1.0
		 * @static
		 * @staticvar array $_instance
		 */
		public static function instance() {

			if ( ! isset( self::$_instance ) && ! ( self::$_instance instanceof Wow_Plugin ) ) {

				$info = self::information();

				self::$_instance = new Wow_Plugin;

				register_activation_hook( __FILE__, array( self::$_instance, 'plugin_activate' ) );
				add_action( 'plugins_loaded', array( self::$_instance, 'text_domain' ) );

				if ( get_option( 'wow_' . $info['plugin']['prefix'] . '_updater_4.0' ) === false ) {
					add_action( 'admin_init', array( self::$_instance, 'plugin_updater' ) );
				}

				self::$_instance->_includes();
				self::$_instance->admin  = new Wow_Plugin_Admin( $info );
				self::$_instance->public = new Wow_Plugin_Public( $info );
			}

			return self::$_instance;
		}

		/**
		 * Throw error on object clone.
		 * The whole idea of the singleton design pattern is that there is a single
		 * object therefore, we don't want the object to be cloned.
		 *
		 * @return void
		 * @since  1.0
		 * @access protected
		 */
		public function __clone() {
			$info = self::information();
			$text = $info['plugin']['text'];
			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_attr__( 'Cheatin&#8217; huh?', $text ), '0.1' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @return void
		 * @since  1.0
		 * @access protected
		 */
		public function __wakeup() {
			$info = self::information();
			$text = $info['plugin']['text'];
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_attr__( 'Cheatin&#8217; huh?', $text ), '0.1' );
		}


		/**
		 * Include required files.
		 *
		 * @access private
		 * @return void
		 * @since  1.0
		 */
		private function _includes() {
			if ( ! class_exists( 'Wow_Company' ) ) {
				include_once 'includes/class-wow-company.php';
			}
			include_once 'admin/class-admin.php';
			include_once 'public/class-public.php';
		}

		/**
		 * Activate the plugin.
		 * create the database
		 * create the folder in wp-upload
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function plugin_activate() {
			$info   = self::information();
			$prefix = $info['plugin']['prefix'];
			include_once 'includes/plugin-activation.php';
		}

		/**
		 * Download the folder with languages.
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function text_domain() {
			$info             = self::information();
			$text             = $info['plugin']['text'];
			$languages_folder = dirname( plugin_basename( __FILE__ ) ) . '/languages/';
			load_plugin_textdomain( $text, false, $languages_folder );
		}

		/*
		 * Update the plugin option to version 4.0
		 */

		public function plugin_updater() {
			include 'includes/plugin-updater.php';
		}

	}

endif; // End if class_exists check.

/**
 * The main function for that returns Wow_Plugin
 *
 * @since 1.0
 */
function Wow_Plugin_run() {
	return Wow_Plugin::instance();
}

// Get Running.
Wow_Plugin_run();
