<?php /* Template Name: How it works */ ?>
<?php get_header(); ?>
<div class="site-content">
    <?php if ( have_posts() ): while ( have_posts() ) :the_post(); ?>
        <?php if ( get_field('has_call_to_action') && get_field('has_call_to_action') === 'Yes' ) : ?>
            <?php template_view('parts', 'cta'); ?>
        <?php endif; ?>
        <div class="content__wrapper">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>

