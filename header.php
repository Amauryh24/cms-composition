<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <?php wp_head(); ?>
  <title>Composition</title>
</head>
<body>
  <div id="mic">
    <nav>
       <div class="nav-wrapper black">
         <a href="#" class="brand-logo white-text">CMS-COMPOSITION</a>
         <?php
           wp_nav_menu( array(
             'menu'            => 'top-menu',
             'theme_location'  => 'primary'
             )
           );
         ?>
       </div>
    </nav>
  </div>
