<?php
function ap_last_project($wp_customize)
{
    // Settings
    $wp_customize->add_setting('ap_last_project_section', array('default' => ''));
    $wp_customize->add_setting('ap_last_project_image', array('default' => ''));
    $wp_customize->add_setting('ap_last_project_title', array('default' => ''));
    $wp_customize->add_setting('ap_last_project_comment', array('default' => ''));
    $wp_customize->add_setting('ap_last_project_btn_title', array('default' => ''));
    $wp_customize->add_setting('ap_last_project_link', array('default' => ''));

    // Sections
    $wp_customize->add_section('ap_mi7dev_last_project', array(
        'title' => 'Último Projeto',
        'priority' => '10',
        'panel' => 'ap_mi7dev_customize'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_last_project_section',
            array(
                'label' => 'Sessão',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_section',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ap_last_project_image',
            array(
                'label' => 'Imagem',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_image'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_last_project_title',
            array(
                'label' => 'Título',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_title',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_last_project_comment',
            array(
                'label' => 'Comentário',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_comment',
                'type' => 'textarea'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_last_project_btn_title',
            array(
                'label' => 'Botão',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_btn_title',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_last_project_link',
            array(
                'label' => 'Link',
                'section' => 'ap_mi7dev_last_project',
                'settings' => 'ap_last_project_link',
                'type' => 'text'
            )
        )
    );
}
