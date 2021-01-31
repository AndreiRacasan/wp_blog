<?php

function blog_theme_support()
{
  // Adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'blog_theme_support');

function blog_menus()
{
  $locations = array(
    'primary' => "Desktop Primary Left SideBar",
    'footer' => "Footer Menu Items"
  );
  register_nav_menus($locations);
}

add_action('init', 'blog_menus');



function blog_register_styles()
{

  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array('blog_bootstrap'), $version, 'all');
  wp_enqueue_style('blog_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'blog_register_styles');


function blog_register_scripts()
{
  wp_enqueue_script('blog_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
  wp_enqueue_script('blog_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
  wp_enqueue_script('blog_bootstrapJS', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
  wp_enqueue_script('blog_main', get_template_directory_uri() . "/assets/javascript/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'blog_register_scripts');
