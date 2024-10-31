<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$border_color     = ! empty( $param['border_color'] ) ? $param['border_color'] : '#44acff';
$background_color = ! empty( $param['background_color'] ) ? $param['background_color'] : '#2a92f3';
$text_color       = ! empty( $param['text_color'] ) ? $param['text_color'] : $background_color;
$hover_color      = ! empty( $param['hover_color'] ) ? $param['hover_color'] : '#1179da';
$text_size        = ! empty( $param['text_size'] ) ? $param['text_size'] : '16';

$screen      = ! empty( $param['screen'] ) ? $param['screen'] : '480';
$screen_more = ! empty( $param['screen_more'] ) ? $param['screen_more'] : '1400';

$css = '';

$css .= '
	#wow-skype-button-' . $id . ' {
		color: ' . $text_color . ';
		font-size: ' . $text_size . 'px;
	}';

$css .= '
	#wow-skype-button-' . $id . ' .wow-skype-buttons-container {
		background-color: ' . $background_color . ';
	}';

$css .= '
	#wow-skype-button-' . $id . ' .wow-skype-buttons-container a {
		border-bottom: 1px solid ' . $border_color . ';
	}';

$css .= '
	#wow-skype-button-' . $id . ' .wow-skype-buttons-container a:hover {
		background-color: ' . $hover_color . ';
	}';



$css = trim( preg_replace( '~\s+~s', ' ', $css ) );
