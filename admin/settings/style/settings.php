<?php
/**
 * Style parameters
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

$skype_icon = array(
	'label'   => esc_attr__( 'Skype icon', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[skype_icon]',
		'id'    => 'skype_icon',
		'value' => isset( $param['skype_icon'] ) ? $param['skype_icon'] : 'logo',
	],
	'options' => [
		'logo'         => esc_attr__( 'Logo', $this->plugin['text'] ),
	],
	'tooltip'     => esc_attr__( 'Select an icon to display', $this->plugin['text'] ),
);

$icons_size = array(
	'label'   => esc_attr__( 'Icons size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[icons_size]',
		'id'    => 'icons_size',
		'value' => isset( $param['icons_size'] ) ? $param['icons_size'] : '14',
	],
	'options' => [
		'14' => esc_attr( 'small' ),
		'22' => esc_attr( 'medium' ),
		'30' => esc_attr( 'large' ),
	],
	'tooltip'     => esc_attr__( 'Select an icon size', $this->plugin['text'] ),
);

$text_size = array(
	'label'   => esc_attr__( 'Button text size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[text_size]',
		'id'    => 'text_size',
		'value' => isset( $param['text_size'] ) ? $param['text_size'] : '16',
		'min' => '0',
	],
	'addon'    => [
		'unit' => 'px',
	],
	'tooltip'     => esc_attr__( 'Set the text size', $this->plugin['text'] ),
);
