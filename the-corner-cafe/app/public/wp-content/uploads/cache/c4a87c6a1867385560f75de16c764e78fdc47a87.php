<?php $section_fields = App::getWoodTwoCardsFields();

$leftLink = $section_fields['left_card_button'];
if( $leftLink ): 
    $leftLink_url = $leftLink['url'];
    $leftLink_title = $leftLink['title'];
    $leftLink_target = $leftLink['target'] ? $leftLink['target'] : '_self';
endif;

$leftDownload = $section_fields['left_card_download'];
$leftDownload_url = $leftDownload['url'];

$rightLink = $section_fields['right_card_button'];
if( $rightLink ): 
    $rightLink_url = $rightLink['url'];
    $rightLink_title = $rightLink['title'];
    $rightLink_target = $rightLink['target'] ? $rightLink['target'] : '_self';
endif;
?>

<div class="section-wood">
    <div class="two-cards-container">
        <div class="card-container left-card">
            <h3 class="heading"><?php echo e($section_fields['left_card_heading']); ?></h3>
            <div class="paragraph"><?php echo e($section_fields['left_card_paragraph']); ?></div>
            <div class="button-primary">
              <?php if( $section_fields['left_card_choice'] == "link"): ?>
                <a href="<?php echo e(esc_url( $leftLink_url )); ?>" target="<?php echo e(esc_attr( $leftLink_target )); ?>"><?php echo e(esc_html( $leftLink_title )); ?></a>
              <?php elseif( $section_fields['left_card_choice'] == "download"): ?>
                <a download href="<?php echo e(esc_url( $leftDownload_url )); ?>"><?php echo e($section_fields['left_card_download_text']); ?></a>
              <?php endif; ?>
            </div>
        </div>
        <div class="card-container right-card">
            <h3 class="heading"><?php echo e($section_fields['right_card_heading']); ?></h3>
            <div class="paragraph"><?php echo e($section_fields['right_card_paragraph']); ?></div>
            <div class="button-primary">
              <?php if( $section_fields['right_card_choice'] == "link"): ?>
                <a href="<?php echo e(esc_url( $rightLink_url )); ?>" target="<?php echo e(esc_attr( $rightLink_target )); ?>"><?php echo e(esc_html( $rightLink_title )); ?></a>
              <?php elseif( $section_fields['right_card_choice'] == "donation"): ?>
                <a href="#" onclick="return false" id="donation-popup-trigger"><?php echo e($section_fields['right_card_donation_popup_button_text']); ?></a>
              <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('partials.component-modal-donations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>