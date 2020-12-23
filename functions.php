<?php

function university_files() {
    // Scripts
    wp_enqueue_script(
        "js_main_university_js", // Set name
        get_theme_file_uri("/js/scripts-bundled.js"), // Get file
        NULL, // No dependencies needed
        '1.0', // Number of version for the file
        true // Load file before end of </body> tag ?
    );

    // Load styles / fonts
    wp_enqueue_style('css_custom_google_font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('css_font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('css_university_main', get_stylesheet_uri());
}

// Add load css / js action
add_action('wp_enqueue_scripts', 'university_files');

// Add the title value in our title tag
function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenu1Location', 'Footer Menu 1 Location');
    register_nav_menu('footerMenu2Location', 'Footer Menu 2 Location');
    add_theme_support("title-tag");
}

add_action('after_setup_theme', 'university_features');