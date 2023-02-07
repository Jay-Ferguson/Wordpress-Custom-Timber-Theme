<?php

$context = \Timber\Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 2));
$templates        = array( 'index.twig' );
if ( is_home() ) {
     array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );
// Timber::render('index.twig', $context);