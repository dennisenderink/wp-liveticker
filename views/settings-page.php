<?php
/**
 * WP Liveticker 2: Settings page.
 *
 * This file contains the view model for the Plugin settings oage.
 *
 * @package WPLiveticker2
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div>
	<h2>Liveticker <?php esc_html_e( 'Settings', 'wplt2' ); ?></h2>
	<?php
	if ( isset( $_GET['settings-updated'] ) ) {	// phpcs:ignore
		echo '<div class="updated"><p>' . esc_html__( 'Settings updated successfully.', 'wplt2' ) . '</p></div>';
	}
	?>
	<form action="options.php" method="post">
		<?php
		settings_fields( 'wplt2_settings' );
		do_settings_sections( 'wplt2-settings-page' );
		submit_button();
		?>
	</form>
</div>
