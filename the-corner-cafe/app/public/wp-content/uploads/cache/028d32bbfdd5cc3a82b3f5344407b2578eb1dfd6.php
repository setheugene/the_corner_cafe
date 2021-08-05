<?php $section_fields = App::getSectionLightGinghamFields();

$link = $section_fields['light_section_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>
<div class="light-section">
<div class="gingham-banner"></div>
<div class="section-light container">
    
    <div class="section-light__left">
        
        <?php echo $__env->make('partials.component-modal-landmarks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div>
    <div class="section-light__right">
        <div class="header-offset">
            <h2 class="oleo red"><?php echo e($section_fields['light_section_heading_top']); ?></h2>
            <h2 class="dark"><?php echo e($section_fields['light_section_heading_bottom']); ?></h2>
        </div>
        <div class="section-light__right--paragraph"><?php echo $section_fields['light_section_paragraph']; ?></div>
        <div class="button-primary">
            <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
        </div>
    </div>
</div>
</div>