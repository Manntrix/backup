<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

/**
 * Add plugin menus
 * @author WeCreativez
 * @since 1.2
 */
class WWS_Admin_Init {

    public function __construct() {
        $this->settings_api = new WWS_Admin_Settings_API;

        add_action( 'admin_init', array( $this, 'init_settings' ), 20 );
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
    }

    public function init_settings() {
        $sections = apply_filters( 'wws_admin_setting_sections', array(
            array(
                'id'    => 'wws_appearance_settings',
                'title' => __( 'Appearance', 'wc-wws' ),
            ),
            array(
                'id'    => 'wws_basic_settings',
                'title' => __( 'Basic Settings', 'wc-wws' ),
            ),
            array(
                'id'    => 'wws_manage_support_persons_settings',
                'title' => __( 'Manage Support Person(s)', 'wc-wws' ),
            ),
            array(
                'id'    => 'wws_widget_text_settings',
                'title' => __( 'Widget Text Settings', 'wc-wws' ),
            ),
            array(
                'id'          => 'wws_button_generator_page',
                'title'       => __( 'Button Generator', 'wc-wws' ),
                'custom_page' => WWS_PLUGIN_PATH . 'includes/admin/views/admin-button-generator.php',
            ),
            array(
                'id'          => 'wws_link_generator_page',
                'title'       => __( 'Link Generator', 'wc-wws' ),
                'custom_page' => WWS_PLUGIN_PATH . 'includes/admin/views/admin-link-generator.php',
            ),
            array(
                'id'          => 'wws_qr_generator_page',
                'title'       => __( 'QR Generator', 'wc-wws' ),
                'custom_page' => WWS_PLUGIN_PATH . 'includes/admin/views/admin-qr-generator.php',
            ),
            array(
                'id'    => 'wws_product_query_settings',
                'title' => __( 'Product Query', 'wc-wws' ),
            ),
            array(
                'id'      => 'wws_developer_settings',
                'title'   => __( 'Developer Settings', 'wc-wws' ),
                'desc'    => __( 'Please do not enable debug option without our recommendation.', 'wc-wws' ),
                'display' => false,
            ),
            array(
                'id'      => 'wws_gdpr_settings',
                'title'   => __( 'Developer Settings', 'wc-wws' ),
                'display' => false,
            ),
            array(
                'id'      => 'wws_fb_analytics_settings',
                'title'   => __( 'Facebook Pixel Analytics', 'wc-wws' ),
                'display' => false,
            ),
            array(
                'id'      => 'wws_ga_analytics_settings',
                'title'   => __( 'Google Click Analytics', 'wc-wws' ),
                'display' => false,
            ),
        ) );

        $fields = apply_filters( 'wws_admin_setting_fields', array(
            'wws_appearance_settings'             => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-appearance-settings.php',
            'wws_basic_settings'                  => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-basic-settings.php',
            'wws_manage_support_persons_settings' => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-manage-support-persons.php',
            'wws_widget_text_settings'            => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-widget-text-settings.php',
            'wws_developer_settings'              => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-developer-settings.php',
            'wws_product_query_settings'          => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-product-query.php',
            'wws_gdpr_settings'                   => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-gdpr-setting-page.php',
            'wws_fb_analytics_settings'           => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-fb-analytics-settings.php',
            'wws_ga_analytics_settings'           => include_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-ga-analytics-settings.php',
        ) );

        $this->settings_api->set_sections( $sections );
        $this->settings_api->set_fields( $fields );
        $this->settings_api->admin_init();
    }

    /**
     * Add plugin setting menu on WordPress admin menu
     * @since 1.2
     */
    public function add_admin_menu() {
        add_menu_page(
            esc_html__( 'WhatsApp Support', 'wc-wws' ),
            esc_html__( 'WhatsApp Support', 'wc-wws' ),
            'manage_options',
            'wc-whatsapp-support',
            array( $this, 'admin_setting_page' ),
            'dashicons-format-chat',
            NULL
        );
        add_submenu_page(
            'wc-whatsapp-support',
            esc_html__( 'Analytics', 'wc-wws' ),
            esc_html__( 'Analytics', 'wc-wws' ),
            'manage_options',
            'wc-whatsapp-support-analytics',
            array( $this, 'admin_analytics_page' )
        );
        add_submenu_page(
            'wc-whatsapp-support',
            esc_html__( 'FB & GA Analytics', 'wc-wws' ),
            esc_html__( 'FB & GA Analytics', 'wc-wws' ),
            'manage_options',
            'wc-whatsapp-support-fb-ga-analytics',
            array( $this, 'admin_fb_ga_analytics_page' )
        );
        add_submenu_page(
            'wc-whatsapp-support',
            esc_html__( 'GDPR Setting', 'wc-wws' ),
            esc_html__( 'GDPR Setting', 'wc-wws' ),
            'manage_options',
            'wc-whatsapp-support-gdpr-setting',
            array( $this, 'admin_gdpr_setting_page' )
        );
        add_submenu_page(
            'wc-whatsapp-support',
            esc_html__( 'Plugin Support', 'wc-wws' ),
            esc_html__( 'Plugin Support', 'wc-wws' ),
            'manage_options',
            'wc-whatsapp-support_plugin-support',
            array( $this, 'admin_plugin_support_page' )
        );
        add_submenu_page(
            'wc-whatsapp-support',
            esc_html__( 'Developer Settings', 'wc-wws' ),
            null,
            'manage_options',
            'wc-whatsapp-support_developer-settings',
            array( $this, 'admin_developer_settings_page' )
        );
    }

    // Admin general setting page.
    public function admin_setting_page() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'WordPress WhatsApp Support', 'wc-wws' ) . '</h1>';
        settings_errors();
        do_action( 'wws_admin_notifications' );
        echo '<hr>';
        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();
        echo '</div>';
    }

    // Admin analytics page
    public function admin_analytics_page() {
        $total_clicks            = WWS_Analytics::get_total_clicks();
        $total_clicks_by_mobile  = WWS_Analytics::get_total_clicks_by_mobile();
        $total_clicks_by_desktop = WWS_Analytics::get_total_clicks_by_desktop();
        $current_month_analytics = WWS_Analytics::get_current_month_chart_data();

        require_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-analytics-page.php';
    }

    public function admin_fb_ga_analytics_page() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Facebook and Google Analytics', 'wc-wws' ) . '</h1>';
        settings_errors();
        echo '<hr>';
        $this->settings_api->show_form( 'wws_fb_analytics_settings' );
        $this->settings_api->show_form( 'wws_ga_analytics_settings' );
        echo '</div>';
    }

    // Admin GDPR setting page
    public function admin_gdpr_setting_page() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'GDPR Settings', 'wc-wws' ) . '</h1>';
        settings_errors();
        echo '<hr>';
        $this->settings_api->show_form( 'wws_gdpr_settings' );
        echo '</div>';
    }

    // Admin plugin support page
    public function admin_plugin_support_page() {
        require_once WWS_PLUGIN_PATH . 'includes/admin/views/admin-plugin-support.php';
    }

    public function admin_developer_settings_page() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Developer Settings', 'wc-wws' ) . '</h1>';
        settings_errors();
        echo '<hr>';
        $this->settings_api->show_form( 'wws_developer_settings' );
        echo '</div>';
    }
} // End of WWS_Admin_Init class

// Init the class
$wws_admin_init = new WWS_Admin_Init;