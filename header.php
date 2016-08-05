<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Fotos Under Construction
 */
  $mobile_device=mobile_detect_wp();
 include 'header-'.$mobile_device.'.php';
?>