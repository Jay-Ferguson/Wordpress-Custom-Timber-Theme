<?php
/**
 * Register custom post types
 *
 * @package Dreamteam
 */
namespace Dreamteam;

class RegisterPostTypes {
  /**
    * Run the actions
    */
  public function run() {
    add_action('init', array($this, 'register_property_post_type'));
    add_action('init', array($this, 'register_testimony_post_type'));
    add_action('init', array($this, 'register_team_post_type'));
  }

  /**
  * Register Team Member Post Type
  *
  * @access public
  * @return void
  */

     public function register_property_post_type() {
    register_post_type( 'property',
      array(
        'labels' => array(
          'name'          => __( 'Properties' ),
          'singular_name' => __( 'Property' ),
          'all_items'     => __( 'All Property' ),
          'add_new'       => __( 'Add Property' ),
          'add_new_item'  => __( 'Add New Property' ),
          'edit_item'     => __( 'Edit Property' ),
        ),
        'exclude_from_search' => false,
        'has_archive'         => true,
        'public'              => true,
        'rewrite'             => true,
        'show_in_nav_menus'   => false,
        'show_ui'             => true,
        'supports'            => array('title', 'editor', 'thumbnail')
      )
    );
  }

  public function register_testimony_post_type() {
    register_post_type( 'testimony',
      array(
        'labels' => array(
          'name'          => __( 'testimonies' ),
          'singular_name' => __( 'testimony' ),
          'all_items'     => __( 'All testimonies' ),
          'add_new'       => __( 'Add' ),
          'add_new_item'  => __( 'Add New Testimony' ),
          'edit_item'     => __( 'Edit' ),
        ),
        'exclude_from_search' => false,
        'has_archive'         => true,
        'public'              => true,
        'rewrite'             => true,
        'show_in_nav_menus'   => false,
        'show_ui'             => true,
        'supports'            => array('title', 'editor', 'thumbnail')
      )
    );
  }

  public function register_team_post_type() {
    register_post_type( 'team',
      array(
        'labels' => array(
          'name'          => __( 'Team Members' ),
          'singular_name' => __( 'Team' ),
          'all_items'     => __( 'All Members' ),
          'add_new'       => __( 'Add Member' ),
          'add_new_item'  => __( 'Add New Member' ),
          'edit_item'     => __( 'Edit Member' ),
        ),
        'exclude_from_search' => false,
        'has_archive'         => true,
        'public'              => true,
        'rewrite'             => true,
        'show_in_nav_menus'   => false,
        'show_ui'             => true,
        'supports'            => array('title', 'editor', 'thumbnail')
      )
    );
  }

  }

