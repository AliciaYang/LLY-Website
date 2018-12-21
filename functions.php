<?php
/**
 * Li Liang Ying Functions
 *
 * @package liliangying
 */

function lly_scripts_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . "/assets/css/lly.css", array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . "/assets/js/lly.js",  array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lly_scripts_enqueue');

function lly_load_bootstrap_scripts() {
  wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-grid.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-reboot.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css', array(), '4.1.3', 'all');
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, '3.3.1', true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.bundle.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap-bundle');
  wp_register_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'lly_load_bootstrap_scripts');
