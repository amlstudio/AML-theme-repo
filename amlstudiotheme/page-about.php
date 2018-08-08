<?php
/**
 * The template for displaying the About page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();
get_template_part('template-parts/page-template', 'about');
get_template_part('template-parts/front-page', 'staff');
get_template_part('template-parts/page-template', 'privacy-policy');
// get_template_part('template-parts/front-page', 'contact');
 get_footer(); ?>
