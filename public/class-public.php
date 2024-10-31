<?php
/**
 * Public Class
 *
 * @package     Wow_Plugin
 * @subpackage  Public
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

namespace skype_buttons_free;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Wow_Plugin_Public {

	private $info;
	/**
	 * @var mixed
	 */
	private $plugin;
	/**
	 * @var mixed
	 */
	private $url;
	/**
	 * @var mixed
	 */
	private $rating;

	public function __construct( $info ) {

		$this->plugin = $info['plugin'];
		$this->url    = $info['url'];
		$this->rating = $info['rating'];

		add_shortcode( 'Wow-Skype-Buttons', array( $this, 'shortcode' ) );
		add_shortcode( $this->plugin['shortcode'], array( $this, 'shortcode' ) );

	}

	function shortcode( $atts ) {
		ob_start();
		require plugin_dir_path( __FILE__ ) . 'shortcode.php';
		$shortcode = ob_get_contents();
		ob_end_clean();

		return $shortcode;
	}


	private function check( $param, $id ) {
		$check   = true;

		if ( !empty($param['test_mode']) ) {
			if ( ! current_user_can( 'administrator' ) ) {
				$check = false;
			}
		}
		return $check;
	}

}