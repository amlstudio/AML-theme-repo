<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: heroes.
	 */

	$labels = array(
		"name" => __( "heroes", "understrap" ),
		"singular_name" => __( "hero", "understrap" ),
	);

	$args = array(
		"label" => __( "heroes", "understrap" ),
		"labels" => $labels,
		"description" => "Post type to divide the content in the hero area.",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_hero", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "aml_hero", $args );

	/**
	 * Post Type: introductions.
	 */

	$labels = array(
		"name" => __( "introductions", "understrap" ),
		"singular_name" => __( "introduction", "understrap" ),
	);

	$args = array(
		"label" => __( "introductions", "understrap" ),
		"labels" => $labels,
		"description" => "A collective name of any introductional posts that are to be displayed on the website. ",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_introduction", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "editor" ),
	);

	register_post_type( "aml_introduction", $args );

	/**
	 * Post Type: usps.
	 */

	$labels = array(
		"name" => __( "usps", "understrap" ),
		"singular_name" => __( "usp", "understrap" ),
	);

	$args = array(
		"label" => __( "usps", "understrap" ),
		"labels" => $labels,
		"description" => "USP (unique selling points) ",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_usps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "aml_usps", $args );

	/**
	 * Post Type: abouts.
	 */

	$labels = array(
		"name" => __( "abouts", "understrap" ),
		"singular_name" => __( "about", "understrap" ),
	);

	$args = array(
		"label" => __( "abouts", "understrap" ),
		"labels" => $labels,
		"description" => "The text displayed on the about screen. ",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_about", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "aml_about", $args );

	/**
	 * Post Type: references.
	 */

	$labels = array(
		"name" => __( "references", "understrap" ),
		"singular_name" => __( "reference", "understrap" ),
	);

	$args = array(
		"label" => __( "references", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "reference", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "aml_references", $args );

	/**
	 * Post Type: staffs.
	 */

	$labels = array(
		"name" => __( "staffs", "understrap" ),
		"singular_name" => __( "staff", "understrap" ),
	);

	$args = array(
		"label" => __( "staffs", "understrap" ),
		"labels" => $labels,
		"description" => "The section for staff ",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_staff", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "aml_staff", $args );

	/**
	 * Post Type: maps.
	 */

	$labels = array(
		"name" => __( "maps", "understrap" ),
		"singular_name" => __( "map", "understrap" ),
	);

	$args = array(
		"label" => __( "maps", "understrap" ),
		"labels" => $labels,
		"description" => "post type for aml map shortcode. ",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_map", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "aml_map", $args );

	/**
	 * Post Type: Privacy Policy.
	 */

	$labels = array(
		"name" => __( "Privacy Policy", "understrap" ),
		"singular_name" => __( "Privacy Policy", "understrap" ),
	);

	$args = array(
		"label" => __( "Privacy Policy", "understrap" ),
		"labels" => $labels,
		"description" => "Post type for privacy policy",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "aml_privacy_policy", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "aml_privacy_policy", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
