<?php 
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
//css
function telecom_resources(){

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri(). '/css/style.css');
    wp_enqueue_style('grid', get_stylesheet_directory_uri(). '/css/grid.css');
    wp_enqueue_style('mdb', get_stylesheet_directory_uri(). '/css/mdb.css');
    wp_enqueue_style('animations', get_stylesheet_directory_uri(). '/css/animate.css');
}

add_action('wp_enqueue_scripts', 'telecom_resources');
// js
function cool_scripts(){
    wp_enqueue_script( ' query ', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('css3-animate-it', get_stylesheet_directory_uri() . '/js/wow.js');
    
}
add_action('wp_enqueue_scripts', 'cool_scripts');
//excerpt
function custom_lenght_excerpt($length){
    return 5;
}
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('อ่านเพิ่มเติม', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter('excerpt_length', 'custom_lenght_excerpt');
//end excerpt

//feature image
function telecom_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'telecom_setup');


//image headeśr
/* function lwp_footer_callout($wp_customize){
    $wp_customize->add_section('lwp-footer-callout-section',array(
        'title' => 'Telecom'
        
    ));
    $wp_customize->add_section('lwp-footer-callout-headline',array(
        'default' => 'Example '
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'lwp-footer-callout-headline-control',array(
        'label' => 'Head',
        'section' => 'lwp-footer-callout-section',
        'setting' => 'lwp-footer-callout-headline'
     )));
}
add_action('customize_register', 'lwp_footer_callout'); */
?>