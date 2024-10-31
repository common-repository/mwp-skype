<?php
/**
 * Update plugin data to new version
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

namespace skype_buttons_free;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$info = self::information();

if ( get_option( 'wow_' . $info['plugin']['prefix'] . '_updater_4.0' ) === false ) {

	global $wpdb;
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	$table = $wpdb->prefix . 'wow_' . $info['plugin']['prefix'];

	$sql = "CREATE TABLE " . $table . " (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		title VARCHAR(200) NOT NULL,
		param TEXT,
		script TEXT,
		style TEXT,
		status INT,
		UNIQUE KEY id (id)
	) DEFAULT CHARSET=utf8;";
	dbDelta( $sql );

	$old_table = $wpdb->prefix . 'wow_skype_free';
	$result = $wpdb->get_results( "SELECT * FROM " . $old_table . " order by id asc" );
	if ( count( $result ) > 0 ) {

		foreach ( $result as $key => $val ) {
			$id = $val->id;
			$param = unserialize( $val->param );
			$path = $info['plugin']['dir'] . 'admin/generate/';

			$in_script =  '';

			$css = '';
			include( $path . 'style.php' );
			$in_style =  $css;

			$data = array(
				'id' => $id,
				'title' => $val->title,
				'param' => $val->param,
				'script' => $in_script,
				'style' => $in_style,
				'status' => 1,

			);

			$wpdb->insert( $table, $data );
		}


	}

	update_option( 'wow_' . $info['plugin']['prefix'] . '_updater_4.0', '4.0' );
}
