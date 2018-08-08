<?php 

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: references.
	 */

	$labels = array(
		"name" => __( "references", "understrap" ),
		"singular_name" => __( "reference", "understrap" ),
	);

	$args = array(
		"label" => __( "references", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "references",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'references', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "aml_reference",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "aml_reference", array( "aml_references" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
