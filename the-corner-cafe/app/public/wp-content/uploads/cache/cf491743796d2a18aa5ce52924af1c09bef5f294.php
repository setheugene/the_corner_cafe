<?php $modal_fields = App::getLandmarkModalFields(); ?>

<div class="landmark-modal">
    <img src="<?php echo e($modal_fields['landmark_image']); ?>" alt="restaurant landmark item">
    <div id="trigger" class="neon-clock-tooltip trigger">+</div>
    <div class="tooltip-modal">
        <div class="content">
            <div class="header"><?php echo e($modal_fields['modal_header']); ?></div>
            <div class="paragraph"><?php echo $modal_fields['modal_paragraph']; ?></div>
            <div id="landmark-exit" class="button-primary"><a onclick="return false" href="">Close</a></div>
        </div>
    </div>
</div>
