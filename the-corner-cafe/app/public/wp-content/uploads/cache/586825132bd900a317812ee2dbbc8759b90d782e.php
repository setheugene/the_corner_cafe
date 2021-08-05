<?php $section_fields = App::getEmploymentFields(); 

$download = $section_fields['downloadable_application'];
$download_url = $download['url'];

?>

<div class="section-employment">
    <div class="employment-description"><?php echo $section_fields['description']; ?></div>
    <div class="employment-two-column">
        <div class="column-left">
        <?php while(have_rows('job_openings')): the_row(); ?>
            <h4 class="location"><?php echo e(the_sub_field('location')); ?><span class="circle plus"></span></h4>
            <div class="positions-container">
            <?php while(have_rows('positions')): the_row(); ?>
            <div class="position">
                <h6><?php echo e(the_sub_field('job_position')); ?></h6>
                <?php echo the_sub_field('job_description'); ?>

            </div>
        <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
        <div class="button-primary">
            <a target="_new" download href="<?php echo e(esc_url( $download_url )); ?>"><?php echo e($section_fields['application_download_button_text']); ?></a>
        </div>
        </div>
        <div class="column-right">
            <h4 class="oleo"><?php echo e($section_fields['form_header']); ?></h4>
            <?php echo do_shortcode($section_fields['form_shortcode']); ?>

        </div>
    </div>
</div>