<?php
/**
 * Register custom taxonomies
 *
 * @package Dreamteam
 */
namespace Dreamteam;

class RegisterTaxonomies {
  /**
   * Run actions
   */
  public function run() {
    add_action('init', array( $this, 'register_property_taxonomy'));
    add_action('init', array( $this, 'register_testimonies_taxonomy'));
    add_action('init', array( $this, 'register_position_taxonomy'));
  }

  /**
   * Register Position Taxonomy
   *
   * @access public
   * @return void
   */


  public function register_property_taxonomy() {
    register_taxonomy('property_type', 'properties', array(
      'hierarchical' => true,
      'show_tagcloud' => false,
      'labels' => array(
        'name' => _x( 'Properties', 'taxonomy general name' ),
        'singular_name' => _x( 'Property', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Properties' ),
        'all_items' => __( 'All Properties' ),
        'parent_item' => __( 'Parent Property' ),
        'parent_item_colon' => __( 'Parent Property:' ),
        'edit_item' => __( 'Edit Property' ),
        'update_item' => __( 'Update Property' ),
        'add_new_item' => __( 'Add New Property' ),
        'new_item_name' => __( 'New Property Name' ),
        'menu_name' => __( 'Properties' ),
      )
    ));
  }

  public function register_testimonies_taxonomy() {
    register_taxonomy('client_name', 'testimonies', array(
      'hierarchical' => true,
      'show_tagcloud' => false,
      'labels' => array(
        'name' => _x( 'Properties', 'taxonomy general name' ),
        'singular_name' => _x( 'Property', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Properties' ),
        'all_items' => __( 'All Properties' ),
        'parent_item' => __( 'Parent Property' ),
        'parent_item_colon' => __( 'Parent Property:' ),
        'edit_item' => __( 'Edit Property' ),
        'update_item' => __( 'Update Property' ),
        'add_new_item' => __( 'Add New Property' ),
        'new_item_name' => __( 'New Property Name' ),
        'menu_name' => __( 'Properties' ),
      )
    ));
  }



 public function register_position_taxonomy() {
    register_taxonomy('position', 'team', array(
      'hierarchical' => true,
      'show_tagcloud' => false,
      'labels' => array(
        'name' => _x( 'Positions', 'taxonomy general name' ),
        'singular_name' => _x( 'Position', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Positions' ),
        'all_items' => __( 'All Positions' ),
        'parent_item' => __( 'Parent Position' ),
        'parent_item_colon' => __( 'Parent Position:' ),
        'edit_item' => __( 'Edit Position' ),
        'update_item' => __( 'Update Position' ),
        'add_new_item' => __( 'Add New Position' ),
        'new_item_name' => __( 'New Position Name' ),
        'menu_name' => __( 'Positions' ),
      )
    ));
  }

}
