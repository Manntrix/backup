<?php
return apply_filters( 'wws_product_query_settings', array(
    'wws_product_query_status'                  => array(
        'title'    => __( 'Product Support Button', 'wc-wws' ),
        'desc'     => __( 'Enable/ Disable', 'wc-wws' ),
        'desc_tip' => __( 'Enable / Disable product support button on WooCommerce single product page.', 'wc-wws' ),
        'id'       => 'wws_product_query_status',
        'default'  => 'yes',
        'type'     => 'checkbox',
    ),
    'wws_product_query_button_location'         => array(
        'title'    => __( 'Button Location', 'wc-wws' ),
        'desc_tip' => __( 'Choose the location of product query button.', 'wc-wws' ),
        'id'       => 'wws_product_query_button_location',
        'default'  => 'woocommerce_before_add_to_cart_form',
        'type'     => 'select',
        'options'  => array(
            'woocommerce_before_add_to_cart_form'  => __( 'After Short Description', 'wc-wws' ),
            'woocommerce_after_add_to_cart_button' => __( 'After Add to Cart Button', 'wc-wws' ),
        ),
    ),
    'wws_product_query_button_background_color' => array(
        'title'    => __( 'Button Color', 'wc-wws' ),
        'desc_tip' => __( 'Change button background color.', 'wc-wws' ),
        'id'       => 'wws_product_query_button_background_color',
        'default'  => '#22c15e',
        'type'     => 'color',
    ),
    'wws_product_query_button_text_color'       => array(
        'title'    => __( 'Button Text Color', 'wc-wws' ),
        'desc_tip' => __( 'Change button text color.', 'wc-wws' ),
        'id'       => 'wws_product_query_button_text_color',
        'default'  => '#ffffff',
        'type'     => 'color',
    ),
    'wws_product_query_button_label'            => array(
        'title'    => __( 'Button Label', 'wc-wws' ),
        'desc_tip' => __( 'Enter button label.', 'wc-wws' ),
        'id'       => 'wws_product_query_button_label',
        'type'     => 'text',
        'class'    => 'regular-text',
    ),
    'wws_product_query_support_number'          => array(
        'title'             => __( 'Support Contact Number', 'wc-wws' ),
        'desc_tip'          => __( 'Enter mobile phone number with the international country code, without + character. Example:  911234567890 for (+91) 1234567890', 'wc-wws' ),
        'id'                => 'wws_product_query_support_number',
        'type'              => 'number',
        'class'             => 'regular-text',
        'custom_attributes' => array(
            'step' => '1',
        ),
    ),
    'wws_product_query_support_person_name'     => array(
        'title'    => __( 'Support Person Name', 'wc-wws' ),
        'desc_tip' => __( 'Enter the name of support person.', 'wc-wws' ),
        'id'       => 'wws_product_query_support_person_name',
        'type'     => 'text',
        'class'    => 'regular-text',
    ),
    'wws_product_query_support_person_title'    => array(
        'title'    => __( 'Support Person Title', 'wc-wws' ),
        'desc_tip' => __( 'Enter the title / designation of support person.', 'wc-wws' ),
        'id'       => 'wws_product_query_support_person_title',
        'type'     => 'text',
        'class'    => 'regular-text',
    ),
    'wws_product_query_support_person_image'    => array(
        'title'    => __( 'Support Person Image', 'wc-wws' ),
        'desc_tip' => __( 'Upload support person image.', 'wc-wws' ),
        'id'       => 'wws_product_query_support_person_image',
        'type'     => 'file',
        'class'    => 'regular-text',
        'css'      => 'width:240px;',
    ),
    'wws_product_query_support_pre_message'     => array(
        'title' => __( 'Pre Populated Message', 'wc-wws' ),
        'desc'  => wp_kses_post( sprintf( __( 'Use %s shortcode for product title and %s for product URL', 'wc-wws' ), '<code>{title}</code>', '<code>{url}</code>' ) ),
        'id'    => 'wws_product_query_support_pre_message',
        'type'  => 'textarea',
        'class' => 'regular-text',
        'css'   => 'height:120px',
    ),
    'wws_product_query_exclude_by_products'     => array(
        'title'    => __( 'Exclude by products', 'wc-wws' ),
        'desc_tip' => __( 'You can exclude or turn off WhatsApp product query button by products.', 'wc-wws' ),
        'id'       => 'wws_product_query_exclude_by_products',
        'default'  => array(),
        'type'     => 'dropdown_posts',
        'class'    => 'wws-select2 regular-text',
        'select'   => array(
            'multiple' => true,
        ),
        'posts'    => array(
            'post_type' => 'product',
        ),
    ),
    'wws_product_query_exclude_by_categories'   => array(
        'title'      => __( 'Exclude by categories', 'wc-wws' ),
        'desc_tip'   => __( 'You can exclude or turn off WhatsApp product query button by categories.', 'wc-wws' ),
        'id'         => 'wws_product_query_exclude_by_categories',
        'default'    => array(),
        'type'       => 'dropdown_categories',
        'class'      => 'wws-select2 regular-text',
        'select'     => array(
            'multiple' => true,
        ),
        'categories' => array(
            'taxonomy' => 'product_cat',
        ),
    ),
) );