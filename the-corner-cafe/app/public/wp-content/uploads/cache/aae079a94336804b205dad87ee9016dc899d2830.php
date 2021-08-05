<?php $section_fields = App::getSectionAboutFields(); 

$link = $section_fields['about_section_bottom_signage'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$largeImage = $section_fields['about_section_large_photo'];
$smallImage = $section_fields['about_section_small_photo'];

?>
       
<div class="about-section">
    <div class="about-section-top">
        <div class="about-section-top-left">
            <div class="header-offset">
                <h2 class="oleo red"><?php echo e($section_fields['about_section_heading_top']); ?></h2>
                <h2 class="dark"><?php echo e($section_fields['about_section_heading_bottom']); ?></h2>
            </div>
            <div class="copy top-third"><?php echo $section_fields['about_section_top_text']; ?></div>
        </div>
        <div class="about-section-top-right">
            <div class="images-container">
                <div class="large-image">
                    <img src="<?php echo e(esc_url($largeImage['url'])); ?>" alt="<?php echo e(esc_attr($largeImage['alt'])); ?>" />
                </div>
                <div class="small-image">
                    <img src="<?php echo e(esc_url($smallImage['url'])); ?>" alt="<?php echo e(esc_attr($smallImage['alt'])); ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="about-section-middle">
        <div class="about-section-middle-left">
            
            <?php echo $__env->make('partials.component-modal-landmarks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </div>
        <div class="about-section-middle-right">
            <div class="copy"><?php echo $section_fields['about_section_middle_text']; ?></div>
        </div>
    </div>
    <div class="about-section-bottom">
        <div class="about-section-bottom-left">
            <div class="copy"><?php echo $section_fields['about_section_bottom_text']; ?></div>
        </div>
        <div class="about-section-bottom-right">
            <div class="button-signage">
                <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><span><?php echo e(esc_html( $link_title )); ?></span></a>
            </div>
        </div>
    </div>
</div>
       
       
