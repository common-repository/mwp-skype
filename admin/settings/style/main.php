<?php
/**
 * Style settings
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
include_once( 'settings.php' );

?>

<div class="columns is-multiline">
    <div class="column is-one-third">
		<?php $this->select( $skype_icon ); ?>
    </div>
    <div class="column is-one-third">
		<?php $this->select( $icons_size ); ?>
    </div>
    <div class="column is-one-third scrolled">
		<?php $this->number( $text_size ); ?>
    </div>
</div>