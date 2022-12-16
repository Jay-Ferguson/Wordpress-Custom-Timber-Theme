<?php
/**
 * Template Name: Team
 * Description: The template for displaying team page
 *
 * @package  dreamteam
 */


$context = Timber::get_context();
$context['team'] = Timber::get_posts( array( 'post_type' => 'property', 'posts_per_page' => -1 ) );

$team_member_image_id = $post->team_member_image;
$context['team_member_image'] = new Timber\Image($team_member_image_id);

Timber::render( array( 'pages/team.twig' ), $context );
