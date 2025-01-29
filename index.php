<?php get_header(); ?>

<div class="row">
    <h1>New Bootstrap Theme</h1>
    <div class="col-md-8">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'mb-4' ); ?>>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-3">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            
            <nav class="post-navigation">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&laquo; Previous', 'bootstrap-theme' ),
                    'next_text' => __( 'Next &raquo;', 'bootstrap-theme' ),
                ) ); ?>
            </nav>
            
        <?php else : ?>
            <p><?php _e( 'No posts found.', 'bootstrap-theme' ); ?></p>
        <?php endif; ?>
    </div>
    
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>