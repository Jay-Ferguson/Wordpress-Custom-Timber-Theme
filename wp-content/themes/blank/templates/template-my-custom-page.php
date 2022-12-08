<?php
/**
 * Template Name: My Custom Page
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render('pages/about-page-my-custom.twig', $context);