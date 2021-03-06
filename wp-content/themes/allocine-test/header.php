<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
        <div class="container">
          <div class="col-md-12">
            <!-- <img src="assets/images/logo.jpg" alt="<?php bloginfo( "description" ) ?>"> -->
            <h1><?php bloginfo( "title" ) ?></h1>
            <h2><?php bloginfo( "description" ) ?></h2>
          </div>
        </div>
        </header>
