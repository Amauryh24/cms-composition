<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <?php wp_head();  ?>
  <title><?php the_title(); ?></title>
</head>
<body>
  <div id="mic">
    <nav>
       <div class="nav-wrapper white">
         <a href="#" class="brand-logo black-text">CMS-COMPOSITION</a>
         <?php wp_nav_menu(); ?>
       </div>
    </nav>
  </div>
