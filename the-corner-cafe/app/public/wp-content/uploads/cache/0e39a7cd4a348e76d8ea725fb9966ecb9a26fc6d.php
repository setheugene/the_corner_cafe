<?php $light_section_fields = App::getSectionLightFields(); ?>

<?php 
$link = $light_section_fields['light_section_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>
    <?php if($light_section_fields['include_gingham'] == "true"): ?>
    <div class="gingham-banner"></div>
    <?php endif; ?>
    <div class="section-light-background"></div>
<section class="section-light container">
    
    <div class="section-light__left">
        <img src="/wp-content/uploads/2020/04/Corner-Cafe-neon-clock-tooltip.png" alt="neon clock">
    </div>
    <div class="section-light__right">
        <div class="header-offset">
            <h2 class="oleo red"><?php echo e($light_section_fields['light_section_heading_top']); ?></h2>
            <h2 class="dark"><?php echo e($light_section_fields['light_section_heading_bottom']); ?></h2>
        </div>
        <div class="section-light__right--paragraph"><?php echo $light_section_fields['light_section_paragraph']; ?></div>
        <div class="button-primary">
            <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
        </div>
    </div>
</section>