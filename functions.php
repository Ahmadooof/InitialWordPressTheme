<?php

    /*
    ** Function to point to the styles files in our wordpress project.
    */
    function add_styles(){
        wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('fontAwesome-css',get_template_directory_uri().'/css/font-awesome.min.css');
    }

    /*
    ** Function to point to the scripts files in our wordpress project.
    ** @param true, just to load these files in footer.
    */
    function add_scripts(){
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
        wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
    }

    /*
    ** 
    ** @param wp_enqueue_scripts: to add styles and scripts.
    ** @param add_styles: invoking the method which we create.
    */

    add_action('wp_enqueue_scripts','add_styles');
    add_action('wp_enqueue_scripts','add_scripts');

    ?>