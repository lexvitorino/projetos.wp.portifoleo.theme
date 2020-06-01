<?php
function ap_social_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('ap_linkedin', array('default' => ''));
    $wp_customize->add_setting('ap_github', array('default' => ''));

    // Sections
    $wp_customize->add_section('ap_mi7dev_social', array(
        'title' => 'Redes Sociais',
        'priority' => '4',
        'panel' => 'ap_mi7dev_customize'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_linkedin',
            array(
                'label' => 'Linkedin',
                'section' => 'ap_mi7dev_social',
                'settings' => 'ap_linkedin',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_github',
            array(
                'label' => 'Github',
                'section' => 'ap_mi7dev_social',
                'settings' => 'ap_github',
                'type' => 'text'
            )
        )
    );
}
