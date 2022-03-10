<footer>
    <?php if ( function_exists('dynamic_sidebar') ) : ?>
        <?php for($i = 1; $i <= 3; $i++) : ?>
            <?php dynamic_sidebar('footer-content-' . $i) ?>
        <?php endfor; ?>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
