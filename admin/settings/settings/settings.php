<?php
/**
 * Settings parameters
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */


$default_title = isset($param['button_title']) ? $param['button_title'] : $title;

$button_title = array (
	'label' => esc_attr__( 'Button Text', $this->plugin['text'] ),
	'attr' => [
		'name'   => 'param[button_title]',
		'id'     => 'button_title',
		'value'    => isset( $param['button_title'] ) ? $param['button_title'] : $default_title,
	],
	'tooltip' => esc_attr__( 'Set text for Skype button.', $this->plugin['text']),
);


$loginskype = array (
	'label' => esc_attr__( 'Skype Name', $this->plugin['text'] ),
	'attr' => [
		'name'   => 'param[loginskype]',
		'id'     => 'loginskype',
		'value'    => isset( $param['loginskype'] ) ? $param['loginskype'] : '',
	],
	'tooltip' => esc_attr__( 'Your Skype name is the username you created when you first joined Skype, other than your email address or phone number.', $this->plugin['text']),
);


$chat = array(
	'label'    => esc_attr__( 'Chat', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[text_chat]',
		'id'    => 'text_chat',
		'value' => isset( $param['text_chat'] ) ? $param['text_chat'] :  esc_attr__( 'Chat', $this->plugin['text'] ),
		'placeholder' => esc_attr__( 'Enter text.', $this->plugin['text'] ),
	],
	'checkbox' => [
		'name'  => 'param[chat]',
		'id'    => 'chat',
		'class' => 'checkLabel',
		'value' => isset( $param['chat'] ) ? $param['chat'] : '1',
	],
	'tooltip'     => esc_attr__( 'Include option Chat to the Skype button.', $this->plugin['text'] ),
);

$call = array(
	'label'    => esc_attr__( 'Call', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[text_call]',
		'id'    => 'text_call',
		'value' => isset( $param['text_call'] ) ? $param['text_call'] :  esc_attr__( 'Call', $this->plugin['text'] ),
		'placeholder' => esc_attr__( 'Enter text.', $this->plugin['text'] ),
	],
	'checkbox' => [
		'name'  => 'param[call_skype]',
		'id'    => 'call_skype',
		'class' => 'checkLabel',
		'value' => isset( $param['call_skype'] ) ? $param['call_skype'] : '1',
	],
	'tooltip'     => esc_attr__( 'Include option Call to the Skype button', $this->plugin['text'] ),
);
