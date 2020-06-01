<?php
function ap_basic_information($wp_customize)
{
    // Settings
    $wp_customize->add_setting('ap_foto', array('default' => ''));
    $wp_customize->add_setting('ap_name', array('default' => ''));
    $wp_customize->add_setting('ap_option_work', array('default' => ''));
    $wp_customize->add_setting('ap_btn_contact', array('default' => ''));
    $wp_customize->add_setting('ap_who_are', array('default' => ''));
    $wp_customize->add_setting('ap_location', array('default' => ''));
    $wp_customize->add_setting('ap_primary_email', array('default' => ''));
    $wp_customize->add_setting('ap_link_site', array('default' => ''));

    // Sections
    $wp_customize->add_section('ap_mi7dev_basic_information', array(
        'title' => 'Informações Básicas',
        'priority' => '1',
        'panel' => 'ap_mi7dev_customize'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'ap_foto',
            array(
                'label' => 'Foto',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_foto',
                'width' => 200,
                'height' => 200,
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_name',
            array(
                'label' => 'Nome',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_name',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_option_work',
            array(
                'label' => 'Trabalhos como (separar por , até dois atributos)',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_option_work',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_btn_contact',
            array(
                'label' => 'Contato (texto do botão)',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_btn_contact',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_who_are',
            array(
                'label' => 'Quem sou eu?',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_who_are',
                'type' => 'textarea'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_location',
            array(
                'label' => 'Localização (Cidade UF)',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_location',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_primary_email',
            array(
                'label' => 'E-mail principal',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_primary_email',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_link_site',
            array(
                'label' => 'Outro Site',
                'section' => 'ap_mi7dev_basic_information',
                'settings' => 'ap_link_site',
                'type' => 'text'
            )
        )
    );
}
