<?php $section_fields = App::getSectionImageRightFields();

$link = $section_fields['section_image_right_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$image = $section_fields['section_image_right_image'];

?>

<style>
    .section-light-ir__right::before {
        background-image: url('<?php echo e(esc_url($image['url'])); ?>')
    }
</style>

<div class="section-light-image-right">
        <div class="section-light-ir__left">
            <div class="header-offset">
                <h2 class="oleo red"><?php echo e($section_fields['section_image_right_heading_top']); ?></h2>
                <h2 class="dark"><?php echo e($section_fields['section_image_right_heading_bottom']); ?></h2>
            </div>
            <div class="section-light-ir__left--paragraph"><?php echo $section_fields['section_image_right_paragraph']; ?></div>
            <div class="button-primary">
                <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
            </div>
        </div>
        <div class="section-light-ir__right">
            <div class="img-wrap">
                <img src="<?php echo e(esc_url($image['url'])); ?>" alt="<?php echo e(esc_attr($image['alt'])); ?>" />
            </div>
        </div>
</div>
