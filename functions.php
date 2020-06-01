<?php
// Include
require get_template_directory() . '/include/setup.php';
require get_template_directory() . '/include/customizer/theme-customizer.php';

// Hooks
add_action("wp_enqueue_scripts", "ap_theme_styles");
add_action("after_setup_theme", "ap_after_setup");
add_action("customize_register", "ap_customize_register");
