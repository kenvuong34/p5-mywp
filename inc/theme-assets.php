<?php

/*
This function loads the required scripts and styles for the child theme
It's a good place to add the loading of Google Fonts or other external libraries that we need for the front-end

*/

/**
First register the required assets for the child theme
 **/
P5Library::loadAsset('jquery');
P5Library::loadAsset('font-awesome');
P5Library::loadAsset('elegant-icon');
P5Library::loadAsset('modernizr');
P5Library::loadAsset('bootstrap');
P5Library::loadAsset('animate.css');

/**
First register the required widgets for the child theme
 **/
P5Library::loadWidget('image');
P5Library::loadWidget('empty');


/**
Using the wp_enqueue_scripts action, we can load the parent style and child style
(and enqueue custom styles and scripts as required)
 **/
function p5child_enqueue_scripts_and_styles() {
  wp_enqueue_style( 'source-sans-pro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700');

  P5Library::loadParentStlye();
  P5Library::loadChildStyle();

  wp_enqueue_script( 'p5child', get_stylesheet_directory_uri() . '/assets/p5child.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'p5child_enqueue_scripts_and_styles');