<?php $section_fields = App::getSectionPrimaryCTAFields(); 

$link = $section_fields['primary_cta_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<style>
    .section-primary-cta::before {
        background-image: url( <?php echo e($section_fields['primary_cta_background_image']); ?> );
        background-position-y:<?php echo e($section_fields['primary_cta_image_position']); ?> ;
    }
</style>

<div class="section-primary-cta <?php echo e($section_fields['primary_cta_overlay_color']); ?>">
    <div class="text"><?php echo e($section_fields['primary_cta_text']); ?></div>
    <div class="button-primary">
        <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
    </div>
</div>