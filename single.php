<?php get_header(); ?>

<main class="main-content">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>