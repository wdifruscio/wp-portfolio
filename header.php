<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Will DiFruscio, Front End Development, Difruscio, Web, Developer, Toronto Developer">
  <meta name="author" content="William DiFruscio">
  <meta name="description" content="William DiFruscio - Toronto based Front End Developer/Programmer">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400|Lato|Montserrat|Roboto" rel="stylesheet">
  <link rel="icon" type="image/png" href="assets/favicon.ico">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


