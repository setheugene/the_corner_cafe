<?php $__env->startSection('content'); ?>


  <?php echo $__env->make('partials.component-block-hero-common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('partials.component-section-about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('partials.component-block-timeline', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('partials.component-block-primary-cta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('partials.component-block-partnerships', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('partials.component-block-wood-two-cards', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>