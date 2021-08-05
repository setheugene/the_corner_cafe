<article <?php post_class() ?>>
<?php 
$link = get_field('post_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif; 

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

?>


  <style>
    .hero-common-bg {
      <?php if( has_post_thumbnail( $post->ID ) ): ?>
      background-image: url( <?php echo $image[0]; ?> );
      <?php else: ?> 
      background-image: url('/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg');
      <?php endif; ?>
      background-position: center center;
    }
  </style>

  <div class="hero-common">
      <div class="hero-common-bg"></div>
      <h1><?php echo get_the_title(); ?></h1>
  </div>

  <div class="single-post-main">
    <div class="entry-content">
      <?php the_content() ?>
      <?php if(get_field('post_link')): ?>
      <div class="button-primary">
        <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
      </div>
      <?php endif; ?>
    </div>
    <div class="related-posts">
      <h4 class="oleo">you might also be interested in:</h4>

<?php $post_objects = get_field('related_articles'); ?>
<?php if( $post_objects ): ?>
   <?php $__currentLoopData = $post_objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php setup_postdata($post) ?>
        <div class="post">
          <?php if(get_the_post_thumbnail($post->ID)): ?>
          <div class="photo"><img src="<?php echo e(get_the_post_thumbnail_url($post->ID, 'large')); ?>" alt="featured image"></div>
          <?php else: ?>
          <div class="photo"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></div>
          <?php endif; ?>
          <h6><?php echo get_the_title($post->ID); ?></h6>
          <div class="link"><a href="<?php echo e(the_permalink($post->ID)); ?>">Read More</a></div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php wp_reset_postdata() ?>

<?php else: ?>
<?php
$recentPosts = wp_get_recent_posts( array(
	'numberposts'      => 2,
	'orderby'          => 'publish_date',
	'order'            => 'DESC',
  'post_status'      => 'publish',
  'post__not_in' => array( get_the_ID() ),
) );
?>
<?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="post">
        <?php if(get_the_post_thumbnail($post["ID"])): ?>
        <div class="photo"><img src="<?php echo e(get_the_post_thumbnail_url($post["ID"],'large')); ?>" alt="featured image"></div>
        <?php else: ?>
        <div class="photo"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></div>
        <?php endif; ?>
        <h6><?php echo e(esc_attr($post["post_title"])); ?></h6>
        <div class="link"><a href="<?php echo e(get_permalink($post["ID"])); ?>">Read More</a></div>
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
    </div>
  </div>
</article>
