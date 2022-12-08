<?php

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => 2));
Timber::render('page-about-us.twig', $context);