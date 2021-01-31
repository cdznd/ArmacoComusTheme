<?php

    function load_libs() {

        //Importing from google fonts api
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap');

        //   //fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap'    => Nunito Sans
        //   //fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap'  => Nunito 

        wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

        wp_enqueue_script('font-awesome-js','//kit.fontawesome.com/efb6de808e.js');

    }

    function load_javascript() {
        
        //O Script esta sendo importado no <head>, porem pode retornar erro se executar antes do DOM carregar totalmente(Ele não encontra os elementos da pagina, pq ainda não foram carregados).
        //Um solução foi colocar DOMContentLoaded no script, para que só execute quando o DOM carregar. Porem existe outra solução que pode ser feita configurando para que o script seja importado em baixo.
        //https://wordpress.stackexchange.com/questions/332857/dont-understand-how-to-link-javascript-files-in-wordpress/332914
        
        //Some "static js", without hot loading

        wp_enqueue_script('btn-top-back', get_theme_file_uri('/js/btn-top-back.js'));

        wp_enqueue_script('form-animation', get_theme_file_uri('/js/form-animation.js'));

        wp_enqueue_script('sticky-nav', get_theme_file_uri('/js/nav-sticky.js'));

        wp_enqueue_script('search', get_theme_file_uri('/js/search.js'));

        //Bootstrap JQuery
        wp_enqueue_script('bootstrapJQuery','//code.jquery.com/jquery-3.3.1.slim.min.js');
        //Another Bootstrap JS
        wp_enqueue_script('bootstrapJS2','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

        wp_enqueue_style('cssStyle', get_theme_file_uri('style.css'));

        //Load JivoChat
        wp_enqueue_script('JivoChat','//code.jivosite.com/widget/PvNSwC0cuR');

    }

    function hot_reload(){

        wp_enqueue_script('comus-bundle','http://localhost:3000/bundled.js');

    }

    function load_features(){

        add_theme_support('title-tag');

        register_nav_menu('HeaderMenuLocation','Header Menu Location');

        add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    }

    add_action('after_setup_theme','load_features');

    add_action('wp_enqueue_scripts', 'load_libs');

    add_action('wp_enqueue_scripts', 'load_javascript');

    //add_action('wp_enqueue_scripts','hot_reload');

?>