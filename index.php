<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fotos Under Construction
 */
 include '1Social_contact.php';
 If($_REQUEST['mailID']!='')
 {
 	include 'inc/contact.php';
 }
  $mobile_device=mobile_detect_wp();
 include 'index-'.$mobile_device.'.php'; ?>
<?php get_footer(); ?>
