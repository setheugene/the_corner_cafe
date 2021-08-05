<article <?php post_class() ?>>
  <header>
    <h3 class="entry-title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h3>
    <?php if(get_post_type() === 'post'): ?>
      <p>post</p>
    <?php endif; ?>
  </header>

</article>
