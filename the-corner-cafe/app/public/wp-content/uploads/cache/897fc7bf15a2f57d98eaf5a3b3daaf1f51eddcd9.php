<?php 
$headquarters_info = get_field('headquarters_location', 'option');

  $entry = [];
    while(have_rows('accordions')) {
      the_row();
      $entry[] = [
        'question' => get_sub_field('question'),
        'answer' => get_sub_field('answer')
    ];
  }

$count = -1;
$half = ceil(count($entry)/2);
$last = count($entry);
?>


<div class="section-faq-accordions">
    <div class="accordions-container">
        <?php $__currentLoopData = $entry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accordion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++ ?>
        <?php if($count != $half): ?>
        <div class="accordion-wrap">
            <div class="accordion-question plus"><?php echo e($accordion['question']); ?></div>
            <div class="panel"> 
                <?php echo $accordion['answer']; ?>

            </div>
        </div>
        <?php elseif($count == $half): ?>
    </div>
    <div class="accordions-container">
        <div class="accordion-wrap">
            <div class="accordion-question plus"><?php echo e($accordion['question']); ?></div>
            <div class="panel"> 
                <?php echo $accordion['answer']; ?>

            </div>
        </div>
        <?php elseif($count == $last): ?>
        <div class="accordion-wrap">
            <div class="accordion-question plus"><?php echo e($accordion['question']); ?></div>
            <div class="panel"> 
                <?php echo $accordion['answer']; ?>

            </div>
        </div>
    </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
