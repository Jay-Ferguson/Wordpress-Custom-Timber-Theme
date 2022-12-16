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
$post = new TimberPost();
$context['post'] = $post;

Timber::render('pages/about-custom-page.twig', $context);