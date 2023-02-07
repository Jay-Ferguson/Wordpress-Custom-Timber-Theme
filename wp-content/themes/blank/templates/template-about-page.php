<?php
/**
 * Template Name: My Custom Page
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...

$context = Timber::get_context();
$context = Timber::get_post();
$post = new TimberPost();
$context['post'] = $post;
$args = ['posts_per_page' => 3, 'post_type' => 'post'];


Timber::render('pages/about-page-my-custom.twig', $context);