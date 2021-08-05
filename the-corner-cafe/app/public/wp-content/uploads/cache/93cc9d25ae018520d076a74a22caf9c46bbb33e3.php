<?php $section_fields = App::getSectionPartnershipsFields();

  $partner = [];
    while(have_rows('partners')) {
      the_row();
      $partner[] = [
        'partner_logo' => get_sub_field('partner_logo'),
        'partner_description' => get_sub_field('partner_description'),
        'partner_link' => get_sub_field('partner_link')
    ];
  }
?>

<div class="section-partnerships">
    <div class="gingham-banner"></div>
    <div class="section-partnerships__heading"><?php echo e($section_fields['partnerships_heading']); ?></div>
    <div class="section-partnerships__description"><?php echo e($section_fields['partnerships_description']); ?></div>
    <div class="partners-container">
        <?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $logo = $card['partner_logo']; ?>
        <div class="partner-card">
            <a target="_blank" href="<?php echo $card['partner_link']; ?>">
                <div class="partner-logo">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                </div>
            </a>
            <div class="partner-description"><?php echo $card['partner_description']; ?></div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>