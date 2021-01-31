<?php

    function load_libs() {

        //Importing from google fonts api
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap');

        //   //fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap'    => Nunito Sans
        //   //fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap'  => Nunito 

        wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

        wp_enqueue_script('font-awesome-js','//kit.fontawesome.com/efb6de808e.js');

    }

    function load_features(){

        add_theme_support('title-tag');

        register_nav_menu('HeaderMenuLocation','Header Menu Location');

        add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

        //Remove admin bar
        remove_action('wp_head', '_admin_bar_bump_cb');

    }

    function load_css(){

        wp_enqueue_style('cssStyle', get_theme_file_uri('style.css'));

    }

    function load_javascript() {
        
        //Some "static js", without hot loading

        wp_enqueue_script('btn-top-back', get_theme_file_uri('/js/btn-top-back.js'));

        wp_enqueue_script('form-animation', get_theme_file_uri('/js/form-animation.js'));

        wp_enqueue_script('sticky-nav', get_theme_file_uri('/js/nav-sticky.js'));

        wp_enqueue_script('search', get_theme_file_uri('/js/search.js'));

        //Bootstrap JQuery
        wp_enqueue_script('bootstrapJQuery','//code.jquery.com/jquery-3.3.1.slim.min.js');
        //Another Bootstrap JS
        wp_enqueue_script('bootstrapJS2','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

        //Load JivoChat
        wp_enqueue_script('JivoChat','//code.jivosite.com/widget/PvNSwC0cuR');

    }

    function hot_reload(){

        wp_enqueue_script('comus-bundle','http://localhost:3000/bundled.js');

    }

    add_action('wp_enqueue_scripts', 'load_libs');

    add_action('after_setup_theme','load_features');

    add_action('wp_enqueue_scripts', 'load_javascript');

    //Active in Production
    add_action('wp_enqueue_scripts', 'load_css');

    //Deactivate in production
    //add_action('wp_enqueue_scripts','hot_reload');

?>