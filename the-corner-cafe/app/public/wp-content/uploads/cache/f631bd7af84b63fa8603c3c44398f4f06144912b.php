<article <?php post_class() ?>>
  <div class="card">
    <?php if(get_the_post_thumbnail()): ?>
    <div class="photo"><?php echo e(the_post_thumbnail('large')); ?></div>
    <?php else: ?>
    <div class="photo"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></div>
    <?php endif; ?>
    <div class="text">
      <div class="title"><?php echo get_the_title(); ?></div>
      <div class="summary"><?php the_excerpt() ?></div>
      <div class="link"><a href="<?php echo e(get_permalink()); ?>">Read More</a></div>
    </div>
  </div>
</article>
