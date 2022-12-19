<?php
/**
 * Template Name: Team
 * Description: The template for displaying team page
 *
 * @package  dreamteam
 */

$context = Timber::get_context();
$context['team'] = Timber::get_posts( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );

$team_image_id = $post->team_image;
$context['property_image'] = new Timber\Image($team_image_id);

Timber::render( array( 'pages/team.twig' ), $context );
