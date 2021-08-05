<?php $__env->startSection('content'); ?>

<div class="single-post">
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>