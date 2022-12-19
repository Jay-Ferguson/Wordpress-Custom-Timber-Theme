<?php
/**
 * Template Name: About Custom Page
 * Description: A Page Template for the about page.
 *@package Wordpress
 *@subpackage TImber
 *@since Timber
 * 
*/
// Code to display Page goes here...

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 2));
$post = new TimberPost();

Timber::render('pages/about-custom-page.twig', $context);