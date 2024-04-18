<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * WWS_Admin_Enqueue_Scripts class responsable to load all the scripts and styles.
 */
class WWS_Admin_Enqueue_Scripts {

    public function __construct() {
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
    }

    /**
     * Load all the required backend scripts
     * @return void
     * @since 1.3
     */
    public function admin_enqueue_scripts( $hook ) {
        if ( $this->is_my_admin_page( $hook ) !== true ) {
            return;
        }
        
        // Load thickbox
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');

        // Select2
        wp_enqueue_style( 'wws-select2', WWS_PLUGIN_URL . 'assets/libraries/select2/select2.min.css', array(), '4.0.10' );
        wp_enqueue_script( 'wws-select2', WWS_PLUGIN_URL . 'assets/libraries/select2/select2.min.js', array(), '4.0.10', true );

        // Timepicker v1.3.5 - https://timepicker.co/
        wp_enqueue_script( 'wws-timepicker', WWS_PLUGIN_URL . 'assets/libraries/timepicker/jquery.timepicker.min.js', array(), '1.3.5', true );
        wp_enqueue_style( 'wws-timepicker', WWS_PLUGIN_URL . 'assets/libraries/timepicker/jquery.timepicker.min.css', array(), '1.3.5' );

        // Code Mirror
        wp_enqueue_style( 'wws-codemirror', WWS_PLUGIN_URL . 'assets/libraries/codemirror/codemirror.min.css', array(), '5.55.0' );
        wp_enqueue_style( 'wws-codemirror-theme', WWS_PLUGIN_URL . 'assets/libraries/codemirror/theme/dracula.min.css', array(), '5.55.0' );
        wp_enqueue_script( 'wws-codemirror', WWS_PLUGIN_URL . 'assets/libraries/codemirror/codemirror.min.js', array(), '5.55.0' );
        wp_enqueue_script( 'wws-codemirror-clike', WWS_PLUGIN_URL . 'assets/libraries/codemirror/clike/clike.min.js', array(), '5.55.0' );
        wp_enqueue_script( 'wws-codemirror-css', WWS_PLUGIN_URL . 'assets/libraries/codemirror/css/css.min.js', array(), '5.55.0' );

        /**
         * Chartist JS
         * 
         * @link https://github.com/gionkunz/chartist-js
         * @version 0.11.4
         */
        wp_enqueue_style( 'wws-chartist-js', WWS_PLUGIN_URL . 'assets/libraries/chartist-js/chartist.min.css', array(), '0.11.4' );
        wp_enqueue_script( 'wws-chartist-js', WWS_PLUGIN_URL . 'assets/libraries/chartist-js/chartist.min.js', array(), '0.11.4', true );
        
        /**
         * Chartist JS Plugin
         * 
         * @link https://github.com/gionkunz/chartist-plugin-pointlabels
         * @version 0.0.6
         */
        wp_enqueue_script( 'wws-chartist-js-pointlabels', WWS_PLUGIN_URL . 'assets/libraries/chartist-js/plugins/chartist-plugin-pointlabels/chartist-plugin-pointlabels.min.js', array(), '0.0.6', true );

        // Load admin scripts
        wp_enqueue_style( 'wws-admin-style', WWS_PLUGIN_URL . 'assets/css/wws-admin-style.css', array(), WWS_PLUGIN_VER );
        wp_enqueue_script( 'wws-admin-script', WWS_PLUGIN_URL . 'assets/js/wws-admin-script.js', array(), WWS_PLUGIN_VER, true );
        wp_localize_script( 'wws-admin-script', 'wwsAdminObj', array(
            'admin_url' => admin_url( 'admin-ajax.php?ver=' . uniqid() ),
        ) );
    }


    /**
     * Check current admin page is plugin admin page or not.
     * @param  string  $hook
     * @return boolean
     */
    public function is_my_admin_page( $hook ) {
        if ( $hook == 'toplevel_page_wc-whatsapp-support' 
         ||  $hook == 'whatsapp-support_page_wc-whatsapp-support-gdpr-setting'
         ||  $hook == 'whatsapp-support_page_wc-whatsapp-support_plugin-support'
         ||  $hook == 'whatsapp-support_page_wc-whatsapp-support-analytics'
         ||  $hook == 'whatsapp-support_page_wc-whatsapp-support-fb-ga-analytics' ) {
            return true;
        }

        return false;
    }

} // end of class WWS_Admin_Enqueue_Scripts

$wws_admin_enqueue_scripts = new WWS_Admin_Enqueue_Scripts;