<form role="search" method="get" class="search-form" action="<?php echo e(esc_url( home_url( '/' ) )); ?>">
  <label class="search-label">
    <span class="screen-reader-text"><?php echo e(_x( 'Search for:', 'label' )); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" onfocus="this.value=''" value="<?php echo e(get_search_query()); ?>" name="s" />
  </label>
  <button type="submit" class="search-button hide" value="<?php echo e(esc_attr_x( 'Search', 'submit button' )); ?>"><i class="button-icon far fa-search"></i></button>
</form>