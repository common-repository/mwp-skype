<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


$title     = isset( $param['button_title'] ) ? $param['button_title'] : $val->title;
$btn_id    = 'wow-skype-button-' . absint( $id );
$icon_size = isset( $param['icons_size'] ) ? $param['icons_size'] : '14';
$btn_class = 'wow-skype-buttons-wrapper wow-skype-buttons-theme-logo wow-skype-buttons-size-' . $icon_size;
$link      = 'skype:' . $param['loginskype'];

?>
<span id="<?php echo esc_attr( $btn_id ); ?>" class="<?php echo esc_attr( $btn_class ); ?>">
	<span class="wow-skype-buttons-status-skype">
		<span class="wow-skype-buttons-icon"></span><?php echo esc_attr( $title ); ?>
		<span class="wow-skype-buttons-arrow btn-down">&#x25be;</span>
		<span class="wow-skype-buttons-arrow btn-up arrow-hidden">&#x25B4;</span>
	</span>
	<span class="wow-skype-buttons-container skype-hidden">
		<?php if ( ! empty( $param['chat'] ) ) { ?>
            <a href="<?php echo esc_attr( $link ); ?>?chat" class="wow-skype-buttons-cmd-chat">
	            <?php echo esc_attr( $param['text_chat'] ); ?>
            </a>
		<?php }
		if ( ! empty( $param['call_skype'] ) ) { ?>
            <a href="skype:<?php echo $param['loginskype']; ?>?call" class="wow-skype-buttons-cmd-call">
	            <?php echo esc_attr( $param['text_call'] ); ?>
            </a>
		<?php } ?>
	</span>
</span>