<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Theme
 */



?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">


<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">

<title>Natours | Exciting tours for adventurous people</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="navigation__label">&nbsp;
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>
        <?php

        wp_nav_menu( array(
            'menu' => 'primary',
            'menu_class' => 'navigation__list',
            'container' => 'nav',
            'container_class' => 'navigation__nav'))
        ?>
    </div>

    <header class="header">
        <div class="logo-box">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-white.png" alt="logo" class="logo">
        </div>
        <div class="hero-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main"><?php bloginfo('name')?></span>
                <span class="heading-primary-sub"><?php bloginfo('description')?></span>
                <h1>
                    <a href="#" class="btn btn-white">Subscribe</a>
        </div>
    </header>
    <main>
