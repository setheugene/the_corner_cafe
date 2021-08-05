<?php $__env->startSection('content'); ?>
<style>
  .hero-common-bg {
    background-image: url('/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-Riverside.jpg');
    background-position-y: bottom;
  }
</style>

<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1>Search Results for:<span style="display: block;"><?php echo e(the_search_query()); ?></span></h1>
</div>
<div class="search-body">
  <?php if(!have_posts()): ?>

    <h3 class="noResults">Sorry, no results were found.</h3>

  <?php endif; ?>

  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>

  <?php echo get_the_posts_navigation(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>