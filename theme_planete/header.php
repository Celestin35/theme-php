<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav>
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h1><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
        <div class="menu-nav__container">
        <ul class="menu__header">
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'items_wrap' => '%3$s'
            ]);
            ?>
        </ul>
        <a href="#footer" class="contact__btn">CONTACT</a>
        </div>
        
    </nav>
</header>