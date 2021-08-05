<?php $section_fields = App::getSectionMenuFields(); 
  $order_online_link = get_field('order_online_link', 'option');
  if( $order_online_link ): 
    $link_url = $order_online_link['url'];
    $link_title = $order_online_link['title'];
    $link_target = $order_online_link['target'] ? $order_online_link['target'] : '_self';
endif;
$delivery_link = get_field('delivery_link', 'option');
  if( $delivery_link ): 
    $delivery_link_url = $delivery_link['url'];
    $delivery_link_title = $delivery_link['title'];
    $delivery_link_target = $delivery_link['target'] ? $delivery_link['target'] : '_self';
endif;
?>

<div class="section-menu">
    <?php if($section_fields['page_description']): ?>
    <div class="description"><?php echo $section_fields['page_description']; ?></div>
    <?php endif; ?>
    <div class="section-menu-main">
        <div class="left-sidebar">
            <div class="categories-container">
                <ul class="categories-list">
                    <li id="breakfast" class="selected"><h5>BREAKFAST</h5></li>
                    <li id="sandwiches"><h5>SANDWICHES, BURGERS, & CLASSICS</h5></li>
                    <li id="soups"><h5>SOUPS, SALADS, & SPUDS</h5></li>
                    <li id="specials"><h5>SPECIALS</h5></li>
                    <li id="dinner"><h5>DINNER</h5></li>
                    <li id="childrens"><h5>CHILDREN'S MENU</h5></li>
                    <li id="bakery"><h5>BAKERY</h5></li>
                </ul>
            </div>
            <div class="button-container">
                <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>" class="button-slant"><span><?php echo e(esc_html( $link_title )); ?></span></a>
                <a href="<?php echo e(esc_url( $delivery_link_url )); ?>" target="<?php echo e(esc_attr( $delivery_link_target )); ?>" class="button-slant button-left"><span><?php echo e(esc_html( $delivery_link_title )); ?></span></a>
                <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>

            </div>
            <div class="menu-landmark-modal">
                
                <?php echo $__env->make('partials.component-modal-landmarks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            </div>
        </div>
        <div id="menu" class="right-main">
            
            
        </div>
    </div>
</div>