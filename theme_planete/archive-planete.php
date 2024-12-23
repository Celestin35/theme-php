

<div class="container__hero container__hero-planete">
    <?php get_header(); ?>
    <h1>Planètes</h1>
    <h2>Wow c’est de toute beauté</h2>
</div>

<section id="articles">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="div__article div__article-planete">
                <?php if (has_post_thumbnail()) : ?>
                    <img class="img__planete-planetes" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php if (get_field('type_de_planete')) : ?>
                    <p>Type : <?php echo get_field('type_de_planete'); ?></p>
                <?php endif; ?>
                <?php if (get_field('diametre_en_km')) : ?>
                    <p>Diamètre : <?php echo get_field('diametre_en_km'); ?> km</p>
                <?php endif; ?>
                <a class="btn-voir" href="<?php the_permalink(); ?>">Découvrir</a>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Aucune planète trouvée.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
