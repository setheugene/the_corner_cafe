<article <?php post_class() ?>>
  <div class="card">
    <?php if(get_the_post_thumbnail()): ?>
    <div class="photo"><a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_post_thumbnail('large')); ?></a></div>
    <?php else: ?>
    <div class="photo"><a href="<?php echo e(get_permalink()); ?>"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></a></div>
    <?php endif; ?>
    <div class="text">
      <div class="title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></div>
      <div class="summary"><a href="<?php echo e(get_permalink()); ?>"><?php the_excerpt() ?></a></div>
      <div class="link"><a href="<?php echo e(get_permalink()); ?>">Read More</a></div>
    </div>
  </div>
</article>
