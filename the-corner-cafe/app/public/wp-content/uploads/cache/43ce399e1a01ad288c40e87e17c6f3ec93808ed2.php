<?php $section_fields = App::getHalfOverlayFields(); 

$link = $section_fields['overlay_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<style>
  .half-overlay-bg::before {
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0.75) 50%, transparent 50.1%),
    url( <?php echo e($section_fields['overlay_background']); ?> );
  }
</style>

<div class="half-overlay">
    <div class="half-overlay-bg">
        <div class="overlay">
            <div class="header-offset">
                <h2 class="oleo green"><?php echo e($section_fields['overlay_top_heading']); ?></h2>
                <h2 class="dark"><?php echo e($section_fields['overlay_bottom_heading']); ?></h2>
            </div>
            <div class="paragraph"><?php echo $section_fields['overlay_paragraph']; ?></div>
            <div class="button-primary">
                <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
            </div>
        </div>
    </div>
</div>