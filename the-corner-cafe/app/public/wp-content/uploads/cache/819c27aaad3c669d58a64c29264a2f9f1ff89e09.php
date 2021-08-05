<?php $section_fields = App::getSectionTimelineFields(); 

  $timeline_item = [];
    while(have_rows('timeline_item')) {
      the_row();
      $timeline_item[] = [
        'year' => get_sub_field('year'),
        'photo' => get_sub_field('photo'),
        'heading' => get_sub_field('heading'),
        'description' => get_sub_field('description'),
    ];
  }

?>

<div class="section-timeline">
    <div class="header-center">
        <h2 class="oleo dark"><?php echo e($section_fields['timeline_section_heading_top']); ?></h2>
        <h2><?php echo e($section_fields['timeline_section_heading_bottom']); ?></h2>
    </div>
    <div class="timeline-container">
      <?php $__currentLoopData = $timeline_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $image = $slide['photo']; ?>
      <div class="item">
        <div class="year"><?php echo $slide['year']; ?></div>
        <div class="card">
          <hr class="vr">
          <div class="photo">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="heading"><?php echo $slide['heading']; ?></div>
          <div class="description"><?php echo $slide['description']; ?></div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>