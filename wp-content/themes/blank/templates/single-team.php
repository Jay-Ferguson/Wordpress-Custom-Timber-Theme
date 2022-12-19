<?php
/**
 * The Template for displaying single team page
 *
 * @package dreamteam
 */

$context = Timber::get_context();

// Get posts of the associated user

// $team = $context['post']->get_field('team_description');
// if($team){
// 	$context['team_description'] = Timber::get_posts(array('realtor' => $team['ID'], 'post_type' => 'post', 'numberposts' => 3));
// }


$context = Timber::get_context();
$context['team'] = Timber::get_posts( array( 'post_type' => 'team_member', 'posts_per_page' => 3 ) );

// Get properties description
// $team_description = $context['post']->get_field('team_description');
// if ($interview) {
// 	$context['team_description'] = new TimberPost($team_description);
// }

$post = new Timber\Post();
if (isset($post->team_image) && strlen($post->team_image)){
	$post->team_image = new Timber\Image($post->team_image);
}
$team_image_id = $post->team_image;
$data = Timber::context();
$data['post'] = $post;
Timber::render( array( 'pages/single-team.twig', 'page-' . $timber_post->post_name . '.twig', 'pages/team.twig'  ), $context );
