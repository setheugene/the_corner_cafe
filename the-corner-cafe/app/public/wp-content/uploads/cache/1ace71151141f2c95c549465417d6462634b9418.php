<?php $section_fields = App::getSectionMenuFields(); ?>

<div class="section-menu">
    <?php if($section_fields['page_description']): ?>
    <div class="description"><?php echo $section_fields['page_description']; ?></div>
    <?php endif; ?>
    <div class="section-menu-main">
        <div class="left-sidebar">
            <div class="categories-container">
                <ul class="categories-list">
                    <li id="specials" class="selected"><h5>SPECIALS</h5></li>
                    <li id="breakfast"><h5>BREAKFAST</h5></li>
                    <li id="sandwiches"><h5>SANDWICHES, BURGERS, & CLASSICS</h5></li>
                    <li id="soups"><h5>SOUPS, SALADS, & SPUDS</h5></li>
                    <li id="dinner"><h5>DINNER</h5></li>
                    <li id="childrens"><h5>CHILDREN'S MENU</h5></li>
                    <li id="bakery"><h5>BAKERY</h5></li>
                </ul>
            </div>
            <div class="button-container">
                <a href="/order-online" class="button-slant"><span>order online</span></a>
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