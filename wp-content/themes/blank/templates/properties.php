<?php
/**
 * Template Name: Properties
 * Description: The template for displaying properties
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$context['properties'] = Timber::get_posts( array( 'post_type' => 'property', 'posts_per_page' => -1 ) );

$property_image_id = $post->property_image;
$context['property_image'] = new Timber\Image($property_image_id);

Timber::render( array( 'properties.twig' ), $context );