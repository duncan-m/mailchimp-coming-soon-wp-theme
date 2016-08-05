<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fotos Under Construction
 */?>

<?php
   $mobile_device=mobile_detect_wp();
 include 'footer-'.$mobile_device.'.php';
?>
