<?php

/* Funcion de logo del tema */

function custom_logo($wp_customize) {
    $wp_customize->add_setting('logo_dep'); // Add setting for logo uploader
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_dep', array(
        'label' => __('Upload Logo', ''),
        'section' => 'title_tagline',
        'settings' => 'logo_dep',
    )));
}

add_action('customize_register', 'custom_logo');

/* Panel de Redes Sociales */
add_action('customize_register', 'redes');

function redes($wp_customize) {
    /* Agregamos la seccion de redes sociales */
    $wp_customize->add_section('redes_dep', array(
        'title' => __('Redes Sociales'),
        'priority' => 160,
    ));
    /* Agregamos los setting a redes sociales */
    $wp_customize->add_setting('url_facebook', array(
        'default' => '',
    ));

    $wp_customize->add_control('url_facebook', array(
        'label' => 'Facebook: ',
        'section' => 'redes_dep',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_twitter', array(
        'default' => '',
    ));

    $wp_customize->add_control('url_twitter', array(
        'label' => 'Twitter: ',
        'section' => 'redes_dep',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_youtube', array(
        'default' => '',
    ));

    $wp_customize->add_control('url_youtube', array(
        'label' => 'Yotube: ',
        'section' => 'redes_dep',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_flickr', array(
        'default' => '',
    ));

    $wp_customize->add_control('url_flickr', array(
        'label' => 'Flickr: ',
        'section' => 'redes_dep',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_instagram', array(
        'default' => '',
    ));

    $wp_customize->add_control('url_instagram', array(
        'label' => 'Instagram: ',
        'section' => 'redes_dep',
        'type' => 'text',
    ));


    $wp_customize->add_setting('show_feed_icon', array(
        'default' => '1'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'show_feed_icon', array(
        'label' => 'Show Feed icon',
        'section' => 'redes_dep',
        'settings' => 'show_feed_icon',
        'type' => 'checkbox',
            )
            )
    );
    
}



add_action('customize_register', 'xfooter');

function xfooter($wp_customize) {
    $wp_customize->add_section('xfooter', array(
        'title' => __('Footer'),
        'priority' => 170,
    ));
    
    $wp_customize->add_setting('xfooter_url_1', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_url_1', array(
        'label' => 'URL 1',
        'section' => 'xfooter',
        'type' => 'text',
    ));
    $wp_customize->add_setting('xfooter_img_1');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xfooter_img_1', array(
        'label' => __('Imagen 1', ''),
        'section' => 'xfooter',
        'settings' => 'xfooter_img_1',
    )));
    
    $wp_customize->add_setting('xfooter_url_2', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_url_2', array(
        'label' => 'URL 2',
        'section' => 'xfooter',
        'type' => 'text',
    ));
    $wp_customize->add_setting('xfooter_img_2');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xfooter_img_2', array(
        'label' => __('Imagen 2', ''),
        'section' => 'xfooter',
        'settings' => 'xfooter_img_2',
    )));
    
    $wp_customize->add_setting('xfooter_url_3', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_url_3', array(
        'label' => 'URL 3',
        'section' => 'xfooter',
        'type' => 'text',
    ));
    $wp_customize->add_setting('xfooter_img_3');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xfooter_img_3', array(
        'label' => __('Imagen 3', ''),
        'section' => 'xfooter',
        'settings' => 'xfooter_img_3',
    )));
    
    $wp_customize->add_setting('xfooter_address', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_address', array(
        'label' => 'Dirección ',
        'section' => 'xfooter',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('xfooter_address', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_address', array(
        'label' => 'Dirección ',
        'section' => 'xfooter',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('xfooter_phone', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_phone', array(
        'label' => 'Teléfono',
        'section' => 'xfooter',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('xfooter_brand', array(
        'default' => '',
    ));
    $wp_customize->add_control('xfooter_brand', array(
        'label' => 'Sello',
        'section' => 'xfooter',
        'type' => 'text',
    ));
}

/* Terminan las opciones del tema */
?>
