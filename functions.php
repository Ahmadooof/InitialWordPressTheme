<?php

    /*
    ** Function to point to the styles files in our wordpress project.
    */
    function add_styles(){
        wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('fontAwesome-css',get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css');
    }

    /*
    ** Function to point to the scripts files in our wordpress project.
    ** @param true, just to load these files in footer.
    */
    function add_scripts(){

        wp_deregister_script('jquery');         // remove default regerstration of jquery by wordpress.
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);  // adding jquery in the body.
        wp_enqueue_script('jquery');  
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
        wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
    }

    /*
    ** 
    ** @param wp_enqueue_scripts: to add styles and scripts.
    ** @param add_styles: invoking the method which we create.
    */

    add_action('wp_enqueue_scripts','add_styles');
    add_action('wp_enqueue_scripts','add_scripts');
    add_action('init', 'register_custom_menu');

    /*
    ** 
    ** Adding custom menu feature to our theme
    */
    function register_custom_menu(){
        register_nav_menu('bootstrap-nav-menu', __('Navigation Bar'));
    }

    wp_nav_menu();

    /*
    ** 
    ** Adding custom menu feature to our theme
    */

    ?>