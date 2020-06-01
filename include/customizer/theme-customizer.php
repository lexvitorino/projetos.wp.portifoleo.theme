<?php
require get_template_directory() . '/include/customizer/social.php';
require get_template_directory() . '/include/customizer/basic-information.php';
require get_template_directory() . '/include/customizer/testimonials.php';
require get_template_directory() . '/include/customizer/last_project.php';

function ap_customize_register($wp_customize)
{
    $wp_customize->add_panel('ap_mi7dev_customize', array(
        'title' => 'MI7Dev Customize',
        'priority' => '1'
    ));

    ap_social_customizer($wp_customize);
    ap_basic_information($wp_customize);
    ap_testimonials($wp_customize);
    ap_last_project($wp_customize);
}
