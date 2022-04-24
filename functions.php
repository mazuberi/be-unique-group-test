<?php
function add_css()

{

   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false,'1.1','all');

   wp_enqueue_style( 'bootstrap');

   wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css', false,'1.1','all');

   wp_enqueue_style( 'custom-style');

   wp_register_style('fa-css', get_template_directory_uri() . '/assets/fontawesome/css/all.css', false,'1.1','all');

   wp_enqueue_style( 'fa-css');

}

add_action('wp_enqueue_scripts', 'add_css');

function add_script()

{

   wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'jquery');

   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'popper');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'bootstrap');

   // wp_register_script('on-load', get_template_directory_uri() . '/assets/js/on-load.js', array ( 'jquery' ), 1.1, true);

   // wp_enqueue_script( 'on-load');

}

add_action('wp_enqueue_scripts', 'add_script');


require_once("page-elements/load-banner.php");
$banner_data = $load_banner_data->loadBannerData();

require_once("page-elements/load-about.php");
$about_data = $load_about_data->loadAboutData();

require_once("page-elements/load-products-cats.php");
$products_cats = $load_products_cats_data->loadProductsCatsData();

require_once("page-elements/load-products.php");
$products = $load_products_data->loadProductsData();