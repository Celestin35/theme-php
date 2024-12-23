<footer>
    <div class="footer__container">
        <div class="img__footer">
            <a href="<?php echo home_url('/'); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php 
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                    ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" class="logo__footer" alt="<?php bloginfo('name'); ?>">
                <?php else : ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
            </a>    
        </div>
                
         <ul class="menu__footer">
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'items_wrap' => '%3$s'
            ]);
            ?>
        </ul>
        <ul class="liste_icons__footer">
            <?php if (get_theme_mod('facebook-link')) : ?>
            <li><a href="<?php echo esc_url(get_theme_mod('facebook-link')); ?>"><i class="fab fa-facebook"></i></a></li>
            <?php endif; ?>

            <?php if (get_theme_mod('instagram-link')) : ?>
            <li><a href="<?php echo esc_url(get_theme_mod('instagram-link')); ?>"><i class="fab fa-instagram"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
    <p class="copyright">Tous droits réservés</p>
</footer>


<?php wp_footer(); ?>
</body>
</html>