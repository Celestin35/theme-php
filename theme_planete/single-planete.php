

<div class="container__hero_article-planete">
    <?php get_header(); ?>
    <h1 class="h1__article"><?php the_title(); ?></h1>
    <h2 class="h2__article-planete">Explorez en détail cette planète</h2>
</div>

<div class="page-article__container">
    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="planete-image" style="width: 30%>
    <?php endif; ?>

    <p class="description">
        <?php the_field('description'); ?>
    </p>

    <?php if (get_field('type_de_planete')) : ?>
        <p>Type de la planète : <?php echo get_field('type_de_planete'); ?></p>
    <?php endif; ?>

    <?php if (get_field('diametre_en_km')) : ?>
        <p>Diamètre : <?php echo get_field('diametre_en_km'); ?> km</p>
    <?php endif; ?>

    <?php if (get_field('masse_volumique')) : ?>
        <p>Masse volumique : <?php echo get_field('masse_volumique'); ?> kg/m³</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
