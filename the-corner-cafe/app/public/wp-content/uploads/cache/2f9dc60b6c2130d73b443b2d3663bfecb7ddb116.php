<?php $section_fields = App::getGiftCardsFields();

  $gift_cards = [];
    while(have_rows('gift_card_action_cards')) {
      the_row();
      $gift_cards[] = [
        'card_title' => get_sub_field('card_title'),
        'card_link' => get_sub_field('card_link')
    ];
  }
?>

<div class="section-gift-cards">
    <h2 class="oleo"><?php echo e($section_fields['heading']); ?></h2>
    <div class="card-container">
        <?php $__currentLoopData = $gift_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $link = $card['card_link'];
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <div class="action-card">
                <h3 class="heading"><?php echo e($card['card_title']); ?></h3>
                <div class="button-primary">
                    <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>"><?php echo e(esc_html( $link_title )); ?></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>