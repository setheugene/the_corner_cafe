<?php $__env->startSection('content'); ?>

  
<style>
  .hero-common-bg {
    background-image: url( <?php echo e(get_field('common_hero_background_image', 56)); ?> );
    background-position-y:<?php echo e(get_field('hero_image_position', 56)); ?> ;
  }
</style>
<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1><?php echo e(get_field('common_hero_title', 56)); ?></h1>
</div>


<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
 
$args = array(
    'post_type' => 'post',
    'post_status'=>'publish',
    'posts_per_page' => 6,
    'paged' => $paged,
);
 
$the_query = new WP_Query($args);
?>
<?php if( $the_query->have_posts() ): ?>
     <div class="section-blog-posts">
  <div class="blog-listing">
    <?php while(have_posts()): ?> <?php the_post() ?>
        <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>
 </div>
    <div class="pagination">
        <?php
        echo paginate_links( array(
            'format'    => 'page/%#%',
            'current'   => $paged,
            'total'     => $the_query->max_num_pages,
            'mid_size'  => 2,
            'prev_text' => __(''),
            'next_text' => __('')
        ) );
        ?>
    </div>
  </div>
<?php endif; ?>


<?php 
$leftLink = get_field('left_card_button', 56);
if( $leftLink ): 
    $leftLink_url = $leftLink['url'];
    $leftLink_title = $leftLink['title'];
    $leftLink_target = $leftLink['target'] ? $leftLink['target'] : '_self';
endif;

$rightLink = get_field('right_card_button', 56);
if( $rightLink ): 
    $rightLink_url = $rightLink['url'];
    $rightLink_title = $rightLink['title'];
    $rightLink_target = $rightLink['target'] ? $rightLink['target'] : '_self';
endif;
?>

<div class="section-wood">
    <div class="two-cards-container">
        <div class="card-container left-card">
            <h3 class="heading"><?php echo e(get_field('left_card_heading', 56)); ?></h3>
            <div class="paragraph"><?php echo e(get_field('left_card_paragraph', 56)); ?></div>
            <div class="button-primary">
              <?php if(get_field('left_card_choice', 56) == "link"): ?>
                <a href="<?php echo e(esc_url( $leftLink_url )); ?>" target="<?php echo e(esc_attr( $leftLink_target )); ?>"><?php echo e(esc_html( $leftLink_title )); ?></a>
              <?php elseif(get_field('left_card_choice', 56) == "download"): ?>
                <a download href="<?php echo e(esc_url(get_field('left_card_download', 56)['url'])); ?>"><?php echo e(get_field('left_card_download_text', 56)); ?></a>
              <?php endif; ?>
            </div>
        </div>
        <div class="card-container right-card">
            <h3 class="heading"><?php echo e(get_field('right_card_heading', 56)); ?></h3>
            <div class="paragraph"><?php echo e(get_field('right_card_paragraph', 56)); ?></div>
            <div class="button-primary">
              <?php if(get_field('right_card_choice', 56) == "link"): ?>
                <a href="<?php echo e(esc_url( $rightLink_url )); ?>" target="<?php echo e(esc_attr( $rightLink_target )); ?>"><?php echo e(esc_html( $rightLink_title )); ?></a>
              <?php elseif(get_field('right_card_choice', 56) == "donation"): ?>
                <a href="#" id="donation-popup-trigger"><?php echo e(get_field('right_card_donation_popup_button_text', 56)); ?></a>
              <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>