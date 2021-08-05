<?php $section_fields = App::getDonationModalFields(); ?>

<div id="donations" class="modal-donations">
    <div class="donations-modal-content">
        <div class="exit"></div>
        <h4 class="oleo"><?php echo e($section_fields['form_header']); ?></h4>
        <?php echo do_shortcode($section_fields['form_shortcode']); ?>

    </div>
</div>