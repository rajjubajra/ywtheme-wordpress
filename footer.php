</main>

<footer class="site-footer bg-dark text-light py-4 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
            </div>
            <div class="col-md-6 text-end">
                <?php dynamic_sidebar( 'footer-widget' ); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>