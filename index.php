<?php get_header(); ?>
    <div class="site-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
            <?php if (get_field('has_call_to_action') && get_field('has_call_to_action') === "Yes") : ?>
                <?php template_view('parts', 'cta') ?>
            <?php endif; ?>
            <?php the_content(); ?>
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php else : ?>
            <article class="no-results">
                <header class="entry-header">
                    <h1 class="page-title">
                        <?php esc_html_e('Nothing Found', ''); ?>
                    </h1>
                    <div class="entry-content">
                        <p>
                            <?php esc_html_e('It looks like nothing was found on this location', ''); ?>
                        </p>
                    </div>
                </header>
            </article>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>