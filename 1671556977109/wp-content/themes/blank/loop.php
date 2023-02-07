<?php

$context = Timber::get_context();
$args = ['posts_per_page' => 5, 'post_type' => 'post'];
$context['post'] = Timber::get_posts( $args );
$post = new TimberPost();
$context['post'] = $post;

Timber::render( 'loop/post-loop.twig', $context );