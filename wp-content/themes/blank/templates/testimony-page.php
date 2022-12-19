<?php
/**
 * Template Name: testimonies
 * Description: The template for displaying testimonies
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$context['testimonies'] = Timber::get_posts( array( 'post_type' => 'testimony', 'posts_per_page' => -1 ) );

$property_image_id = $post->property_image;
$context['property_image'] = new Timber\Image($property_image_id);

Timber::render( array( 'pages/testimonies.twig' ), $context );