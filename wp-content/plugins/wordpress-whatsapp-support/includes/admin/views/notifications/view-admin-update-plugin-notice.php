<div class="notice notice-success is-dismissible">
    <h3><?php esc_html_e( 'Thank you for choosing the WordPress WhatsApp Support. :)', 'wc-wws' ); ?></h3>
    <p><?php esc_html_e( 'We rapidly improving our plugin by fixing the major and minor bug. Please support us for the best.', 'wc-wws' ); ?></p>

    <h4><?php echo esc_html( sprintf( __( 'Change Log - Version %s', 'wc-wws' ), WWS_PLUGIN_VER ) ); ?></h4>
    <p><?php echo wp_kses_post( __( 'Note: If you upgrade the plugin from <strong>version 1.8.6 or older to version 1.8.7</strong> then please do the following changes or if you installed the plugin first time then you do not need to do the following change :)', 'wc-wws' ) ); ?></p>
    <p><?php esc_html_e( '1: If you are using WPML for multi languages then please re-translate the dynamic strings.', 'wc-wws' ); ?></p>
    <p><?php esc_html_e( '2: Cross check your plugin settings again.', 'wc-wws' ); ?></p>
    <p>
        <a href="https://codecanyon.net/item/wordpress-whatsapp-support/20963962/support" target="_blank" class="button"><?php esc_html_e( 'I found a bug!', 'wc-wws' ); ?></a>
        <a href="https://codecanyon.net/item/wordpress-whatsapp-support/20963962/support" target="_blank" class="button"><?php esc_html_e( 'I need support', 'wc-wws' ); ?></a>
        <a href="<?php echo wp_nonce_url( '?wws_action=dismiss_plugin_update_notice' ); ?>" class="button button-link-delete"><?php esc_html_e( 'Dismiss notice', 'wc-wws' ); ?></a>
    </p>
</div>