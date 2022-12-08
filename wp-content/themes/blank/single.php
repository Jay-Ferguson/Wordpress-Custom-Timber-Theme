<?php

$context = Timber::get_context();
$post = Timber::query_post();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 3));
Timber::render('single.twig', $context);