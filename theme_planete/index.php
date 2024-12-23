
<div class="container__hero">
    <?php get_header(); ?>
    <h1>Blog</h1>
    <h2>On en apprends tous les jours grâce à Planètes</h2>
</div>

<section id="articles"> 
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="div__article">
                <h3><?php the_title(); ?></h3>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%;">
                <?php endif; ?>
                <p><?php the_excerpt(); ?></p>
                <a class="btn-voir" href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>