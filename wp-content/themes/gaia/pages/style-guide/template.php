<?php

/*
Template Name: Style Guide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
get_template_part( 'pages/style-guide/components/typography' );
get_template_part( 'pages/style-guide/components/buttons' );
get_template_part( 'pages/style-guide/components/cards' );
get_template_part( 'pages/style-guide/components/accordion' );
get_footer();