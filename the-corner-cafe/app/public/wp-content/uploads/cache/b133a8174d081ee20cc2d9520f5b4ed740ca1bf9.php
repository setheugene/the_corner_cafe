<a href="<?php echo e(get_permalink()); ?>">
<article <?php post_class() ?>>
  <header>
    <h3 class="entry-title"><?php echo get_the_title(); ?></h3>
    <?php if(get_post_type() === 'post'): ?>
      <p>post</p>
    <?php endif; ?>
  </header>

</article>
</a>
