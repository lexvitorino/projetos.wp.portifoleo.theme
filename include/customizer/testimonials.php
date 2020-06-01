<?php
function ap_testimonials($wp_customize)
{
    // Settings
    $wp_customize->add_setting('ap_testimonials_name', array('default' => ''));
    $wp_customize->add_setting('ap_testimonials_occupation', array('default' => ''));
    $wp_customize->add_setting('ap_testimonials_company', array('default' => ''));
    $wp_customize->add_setting('ap_testimonials_comment', array('default' => ''));
    $wp_customize->add_setting('ap_testimonials_linkedin', array('default' => ''));
    $wp_customize->add_setting('ap_testimonials_github', array('default' => ''));

    // Sections
    $wp_customize->add_section('ap_mi7dev_testimonials', array(
        'title' => 'Depoimentos',
        'priority' => '7',
        'panel' => 'ap_mi7dev_customize'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_name',
            array(
                'label' => 'Nome',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_name',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_occupation',
            array(
                'label' => 'Cargo',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_occupation',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_company',
            array(
                'label' => 'Empresa',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_company',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_comment',
            array(
                'label' => 'Comentário',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_comment',
                'type' => 'textarea'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_linkedin',
            array(
                'label' => 'Linkedin',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_linkedin',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ap_testimonials_github',
            array(
                'label' => 'Github',
                'section' => 'ap_mi7dev_testimonials',
                'settings' => 'ap_testimonials_github',
                'type' => 'text'
            )
        )
    );
}
