<?php

$context = Timber::get_context();
$post = Timber::query_post();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 3));
Timber::render('single.twig', $context);

$post = new Timber\Post();
if (isset($post->hero_image) && strlen($post->hero_image)){
	$post->hero_image = new Timber\Image($post->hero_image);
}

$data = Timber::context();
$data['post'] = $post;
Timber::render('single.twig', $data);