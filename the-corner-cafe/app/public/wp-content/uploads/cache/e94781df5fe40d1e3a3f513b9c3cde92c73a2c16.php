<?php $section_fields = App::getOrderOnlineFields();

  $order_cards = [];
    while(have_rows('order_cards')) {
      the_row();
      $order_cards[] = [
        'location' => get_sub_field('location'),
        'link' => get_sub_field('link')
    ];
  }
?>

<div class="section-order-online">
    <h2 class="oleo"><?php echo e($section_fields['heading']); ?></h2>
    <div class="card-container">
        <?php $__currentLoopData = $order_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $link = $card['link'];
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="gingham-bg">
            <div class="location-card">
                <h3 class="heading"><?php echo e($card['location']); ?></h3>
                <div class="button-primary no-shadow">
                    <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>