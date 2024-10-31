<?php
/**
 * Shortcode
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( shortcode_atts( array( 'id' => "" ), $atts ) );
global $wpdb;
$table  = $wpdb->prefix . 'wow_' . $this->plugin['prefix'];
$sSQL   = $wpdb->prepare( "select * from $table WHERE id = %d", $id );
$result = $wpdb->get_results( $sSQL );

if ( count( $result ) > 0 ) {

	foreach ( $result as $key => $val ) {
		$param = unserialize( $val->param );
		$check = $this->check( $param, $id );
		if ( $check === false ) {
			return false;
		}

		if ( empty( $val->status ) ) {
			return false;
		}

		ob_start();
		include( 'partials/public.php' );
		$content = ob_get_contents();
		ob_end_clean();

		$content = trim( preg_replace( '~\s+~s', ' ', $content ) );
		echo $content;

		$slug       = $this->plugin['slug'];
		$version    = $this->plugin['version'];
		$url_asset  = plugin_dir_url( __FILE__ );
		$pre_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		$url_style = $url_asset . 'assets/css/style' . $pre_suffix . '.css';
		wp_enqueue_style( $slug, $url_style, null, $version );

		wp_add_inline_style( $slug, $val->style );

		$script_url = $url_asset . 'assets/js/script' . $pre_suffix . '.js';
		wp_enqueue_script( $slug, $script_url, null, $version );

	}

}
