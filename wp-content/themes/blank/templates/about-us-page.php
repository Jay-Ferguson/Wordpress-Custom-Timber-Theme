<?php

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'posts_per_page' => -1));
Timber::render('pages/about-custom-page.twig', $context);