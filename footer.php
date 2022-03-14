<footer>
    <?php if ( function_exists('dynamic_sidebar') ) : ?>
        <?php dynamic_sidebar('cta-footer'); ?>
        <?php for($i = 1; $i <= 4; $i++) : ?>
            <?php dynamic_sidebar('footer-content-' . $i) ?>
        <?php endfor; ?>
        <?php dynamic_sidebar('copyright-footer') ?>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
