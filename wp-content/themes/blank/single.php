<?php

$context = Timber::get_context();
$context['post'] = new TimberPos();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 3));
Timber::render('single.twig', $context);