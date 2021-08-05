<?php $section_fields = App::getTestimonialFields(); 
  $quote = [];
    while(have_rows('testimonial_quotes')) {
      the_row();
      $quote[] = [
        'quote' => get_sub_field('quote'),
        'name' => get_sub_field('name')
    ];
  }
?>

<style>
  .testimonial-section-bg::before {
    background-image: url( <?php echo e($section_fields['testimonial_background']); ?> );
  }
</style>

<div class="testimonial-section">
    <div class="testimonial-section-bg">
        <div class="testimonial-section-left">
            <h2><?php echo e($section_fields['testimonial_heading']); ?></h2>
            <div class="dish">
                <img src="<?php echo e($section_fields['testimonial_dish']); ?>" alt="full plate of food">
            </div>
        </div>
        <div class="testimonial-section-right">
            <div class="carousel-container">
                <div class="testimonial-slider">
                    <?php $__currentLoopData = $quote; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slide">
                        <div class="quote"><?php echo $slide['quote']; ?></div>
                        <div class="name">- <?php echo $slide['name']; ?></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>