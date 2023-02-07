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


$context = Timber::get_context();
$context['properties'] = Timber::get_posts( array( 'post_type' => 'property', 'posts_per_page' => -1 ) );

// Get properties description
// $property_description = $context['post']->get_field('property_description');
// if ($interview) {
// 	$context['property_description'] = new TimberPost($property_description);
// }

$post = new Timber\Post();
if (isset($post->property_image) && strlen($post->property_image)){
	$post->property_image = new Timber\Image($post->property_image);
}
$property_image_id = $post->property_image;
$context['property_image'] = new Timber\Image($property_image_id);
$data = Timber::context();
$data['post'] = $post;
Timber::render( array( 'single-property.twig' ), $context );

