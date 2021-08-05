<?php $hero_fields = App::getCommonHeroFields(); ?>

<style>
  .hero-common-bg {
    background-image: url( <?php echo e($hero_fields['hero_image']); ?> );
    background-position-y:<?php echo e($hero_fields['hero_image_position']); ?> ;
  }
</style>

<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1><?php echo e($hero_fields['hero_title']); ?></h1>
</div>