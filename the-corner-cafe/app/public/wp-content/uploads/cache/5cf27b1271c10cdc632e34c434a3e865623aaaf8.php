<?php $section_fields = App::getContactFormSectionFields(); ?>


<div class="section-contact">
    <div class="section-contact__top"><?php echo $section_fields['copy']; ?></div>
    <div class="section-contact__bottom">
        <div class="section-contact__bottom-left">
            <?php echo do_shortcode($section_fields['form_shortcode']); ?>

        </div>
        <div class="section-contact__bottom-right">
            
            <?php echo $__env->make('partials.component-modal-landmarks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </div>
    </div>
</div>