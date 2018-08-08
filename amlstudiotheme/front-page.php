<?php

/**
 * The template for displaying the front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

 get_header();
 
?>

<?php 
/**
 * sidstruktur i ordning
 * 
 * Contact Form
 * 
 */
get_template_part('template-parts/front-page', 'hero');
get_template_part('template-parts/front-page', 'introduction');
get_template_part('template-parts/front-page', 'selling-point');
get_template_part('template-parts/front-page', 'usp');
get_template_part('template-parts/page-template', 'about');
get_template_part('template-parts/front-page', 'staff');
get_template_part('template-parts/front-page', 'references');
// get_template_part('template-parts/page-template', 'privacy-policy');

?>

<?php 
get_footer();