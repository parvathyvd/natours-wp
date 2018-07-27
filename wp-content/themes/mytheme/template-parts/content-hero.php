<?php


$header_text = get_field('header_text');
$header_button = get_field('header_button');

?>
    <header class="header">
        <div class="logo-box">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-white.png" alt="logo" class="logo">
        </div>
        <div class="hero-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">Outdoor</span>
                <span class="heading-primary-sub"><?= $header_text ?></span>
                <h1>
                    <a href="#" class="btn btn-white"><?= $header_button ?></a>
        </div>
    </header>
    <main>