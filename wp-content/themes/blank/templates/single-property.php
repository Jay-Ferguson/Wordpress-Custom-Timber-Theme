<?php
/**
 * The Template for displaying single property page
 *
 * @package dreamteam
 */

$context = Timber::get_context();

// Get posts of the associated user

$property = $context['post']->get_field('property_description');
if($property){
	$context['property_description'] = Timber::get_posts(array('realtor' => $property['ID'], 'post_type' => 'post', 'numberposts' => 3));
}

if (isset($post->hero_image) && strlen($post->hero_image)){
	$post->hero_image = new Timber\Image($post->hero_image);
}

// Get user's interview
// $property_description = $context['post']->get_field('property_description');
// if ($interview) {
// 	$context['property_description'] = new TimberPost($property_description);
// }
$data['post'] = $post;
Timber::render( array( 'single-property.twig' ), $context );