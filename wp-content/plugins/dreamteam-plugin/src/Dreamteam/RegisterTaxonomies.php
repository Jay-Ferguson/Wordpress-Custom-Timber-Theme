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

  public function register_team_taxonomy() {
    register_taxonomy('member_name', 'team', array(
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


}
