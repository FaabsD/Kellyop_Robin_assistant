<?php
/* Template Name: FAQ */
$args = array('post_type' => 'FAQ');
$query = new WP_Query($args);
?>
<?php get_header(); ?>
<div class="site-content">
    <div class="title-heading">
        <?php the_title(); ?>
    </div>
    <div class="faq-container">
        <div class="faq-container__items">
            <?php if ( $query->have_posts() ) :
            while ( $query->have_posts() ) :$query->the_post(); ?>
                <div class="item">
                    <div class="item__icon">
                        <div class="icon icon-1">
                            <img src="<?php echo THEME_URL . '/resources/icons/plus.svg' ?>" alt="">
                        </div>
                        <div class=" icon icon-2 icon--hidden">
                            <img src="<?php echo THEME_URL . '/resources/icons/min.svg' ?>" alt="">
                        </div>
                    </div>
                    <h3 class="item__title">
                        <?php the_title(); ?>
                    </h3>
                    <div class="item__answer">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <p>No FAQ's found</p>

        <?php endif; ?>
        <div class="faq-container__image">
            <img src="<?php echo THEME_URL . "/resources/img/faq_vrouw.png" ?>" alt="">
        </div>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="content__wrapper">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
