<?php
/*
 *	Template Name: Guide
 */
$context = Timber::context();
$timber_post = new Timber\Post();
$context['page'] = $timber_post;

Timber::render( array( 'pages/guide.twig' ), $context );