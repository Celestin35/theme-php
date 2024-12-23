<div class="container__hero container__hero--front-page">
    <?php get_header(); ?>
    <h1>DÉCOUVRE LA <span>BEAUTÉ<br></span> DE <span>L’UNIVERS</span></h1>
</div>
<section id="a-propos">
    <h2>À propos</h2>
    <p>Bienvenue dans l'univers fascinant des planètes ! <br> <br>

        Explorez les mystères de notre système solaire et au-delà. Découvrez les paysages uniques des planètes telluriques comme Mars ou Vénus, la grandeur des géantes gazeuses comme Jupiter et Saturne, et les secrets des horizons lointains avec les planètes naines et exoplanètes.<br> <br>

        Notre site vous propose des fiches détaillées, des expériences immersives et des ressources éducatives pour petits et grands passionnés. Prêt(e) à voyager dans l'espace ? Laissez-vous captiver par les merveilles des planètes !<br> <br>
        Soutenez notre mission ! <br> <br>
        Votre don nous aide à continuer d'explorer et partager les merveilles de l'univers. Chaque contribution compte.
    </p>

    <a class="btn__home-page" href="don.php">DON</a>
</section>

<section id="articles-home">
    <h2>Découvrez nos articles</h2>
    <div class="articles-home">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $query = new WP_Query($args);
        if($query->have_posts()) : 
            while($query->have_posts()) : $query->the_post(); ?>
                <div class="div__article">
                    <h3><?php the_title(); ?></h3>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
                    <?php endif; ?>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-voir ">Lire la suite</a>
                </div>
            <?php endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
    </div>
    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-voir ">Voir tous nos articles</a>
</section>

<?php get_footer(); ?>
