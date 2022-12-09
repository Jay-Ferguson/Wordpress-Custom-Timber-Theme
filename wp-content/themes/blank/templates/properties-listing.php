<?php
/**
 * Template Name: Properties
 * Description: The template for displaying properties
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$context['team'] = Timber::get_posts( array( 'post_type' => 'property', 'posts_per_page' => -1 ) );

Timber::render( array( 'property.twig' ), $context );