<?php
/**
 * Template Name: Property listing Custom Page
 * Description: A Page Template for the properties.
 *@package Wordpress
 *@subpackage TImber
 *@since Timber
 * 
*/
// Code to display Page goes here...

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render('pages/property-custom.twig', $context);