<?php
function ap_color_theme_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('ap_color_theme_header', array('default' => '#36393F'));
    $wp_customize->add_setting('ap_color_theme_menu', array('default' => '#f5f5f5'));
    $wp_customize->add_setting('ap_color_theme_btn_contact', array('default' => '#54ba4e'));
    $wp_customize->add_setting('ap_color_theme_body', array('default' => '#34373C'));

    // Sections
    $wp_customize->add_section('ap_mi7dev_color_theme', array(
        'title' => 'Cores',
        'priority' => '5',
        'panel' => 'ap_mi7dev_customize'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ap_color_theme_header',
            array(
                'label' => 'Header',
                'section' => 'ap_mi7dev_color_theme',
                'settings' => 'ap_color_theme_header'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ap_color_theme_menu',
            array(
                'label' => 'Menu',
                'section' => 'ap_mi7dev_color_theme',
                'settings' => 'ap_color_theme_menu'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ap_color_theme_btn_contact',
            array(
                'label' => 'Botão ( Contato )',
                'section' => 'ap_mi7dev_color_theme',
                'settings' => 'ap_color_theme_btn_contact'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ap_color_theme_body',
            array(
                'label' => 'Site',
                'section' => 'ap_mi7dev_color_theme',
                'settings' => 'ap_color_theme_body'
            )
        )
    );
}
