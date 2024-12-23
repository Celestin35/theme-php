<div class="container__hero_article">
    <?php get_header(); ?>
    <h1><?php the_title(); ?></h1>
    <h2 class="h2__article">On en apprends tous les jours grâce à Planètes</h2>
</div>

<div class="page-article__container">

<?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%;" class="img__article">
<?php endif; ?>

<?php the_content(); ?>

<h2 class="h2__article-similaire">Articles similaires</h2>

<div class="articles__similaires">
    <?php
    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post__not_in' => [get_the_ID()]
    ]);

    if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="article__card">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="article__thumbnail">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a class="btn-voir" href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</div>

</div>

<?php get_footer(); ?>
