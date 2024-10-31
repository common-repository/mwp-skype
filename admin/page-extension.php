<?php
/**
 * Extansion version
 *
 * @package    Wow_Plugin
 * @subpackage
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pro_url = 'https://wow-estore.com/item/wow-skype-buttons-pro/';
$pro_button = '<a href="' . esc_url($pro_url) .'" target="_blank" class="button is-primary is-radiusless is-fullwidth is-large">Get Pro Version</a>';

$demo_url = 'https://wow-company.com/preview/wordpress-plugins/wow-skype-buttons-pro/';
$demo_button = '<a href="' . esc_url($demo_url) .'" target="_blank" class="button is-info is-radiusless">Demo Pro version</a>';
?>

<section class="section">

    <h2 class="title has-text-centered is-size-3">GET MORE FEATURES WITH THE PRO PLUGIN.</h2>

    <div class="has-text-centered is-b-margin">
		<?php echo $demo_button;?>
    </div>

   	<div class="theme-browser">
		<div class="themes container">

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Multiple actions
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/triggers.png">
                    <p>Add additional action for button such as: <br/>
                        <strong>Chat, Call, Video Call, Voice message, Add to contacts, Information, Send file.</strong></p>
                </div>
                <?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Status Icons
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/icon.png">
                    <p>Set the status icon for button: Online, Away, Do Not Disturb, Offline,
                        Unknown.</p>
                </div>
	            <?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Scheduling
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/schedule.png">
                    <p>Add scheduling options to your button. With multiple schedule types, you can precisely schedule your button in just a few minutes.</p>
                </div>
				<?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Targeting for Users Role
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/users.png">
                    <p>Target specific sets of your users with new conditions such as User Roles & Login Checks.</p>
                </div>
				<?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Multi language
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/language.png">
                    <p>The condition for display the button depending on the language of the site. It is good to use if you have a website in several languages and you need to show different button for a different language.</p>
                </div>
				<?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Buttons style
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/style.png">
                    <p>Editor of the button colors.</p>
                </div>
				<?php echo $pro_button;?>
            </div>

            <div class="theme">
                <div class="theme-id-container">
                    <h2 class="theme-name">
                        Display control
                    </h2>
                </div>
                <div class="height_screen">
                    <img src="<?php echo plugin_dir_url(__FILE__);?>assets/img/control.png">
                    <p>Setting the display of the modal window on specific pages of the site.</p>
                </div>
				<?php echo $pro_button;?>
            </div>

		</div>
	</div>

</section>