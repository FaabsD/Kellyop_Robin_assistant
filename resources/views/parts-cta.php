<div class="cta call-to-action">
    <?php if ( get_field('call_to_action_content') ) : ?>
        <div class="cta__content">
            <?php the_field('call_to_action_content'); ?>
            <?php if ( get_field('call_to_action_link') ) : ?>
                <?php $linkData = get_field('call_to_action_link') ?>
                <div class="cta__link-container">
                    <a href="<?php echo $linkData['url'] ?>" class="cta__link"
                       target="<?php echo $linkData['target'] ?>">
                        <?php echo $linkData['title'] ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ( get_field('call_to_action_image') ) : ?>
        <div class="cta__image <?php echo (get_field('rounded_image') && get_field('rounded_image')[0] === 'Yes') ? 'cta__image--rounded' : '';  ?>">
            <?php echo wp_get_attachment_image(get_field('call_to_action_image'), 'full'); ?>
        </div>
    <?php elseif ( get_field('call_to_action_instruction_video') ) : ?>
        <div class="cta__instruction-video">
            <?php the_field('call_to_action_instruction_video'); ?>
        </div>
    <?php endif; ?>

</div>
