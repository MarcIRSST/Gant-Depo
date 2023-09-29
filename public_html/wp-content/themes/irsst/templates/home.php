<?php
/*
 *	Template Name: Home
 */
$context = Timber::context();
$timber_post = new Timber\Post();
$context['page'] = $timber_post;

Timber::render( array( 'pages/home.twig' ), $context );