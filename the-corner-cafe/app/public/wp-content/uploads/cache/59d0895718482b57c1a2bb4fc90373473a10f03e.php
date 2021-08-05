<nav class="primary-nav">
  <div class="nav__logo">
    <a href="/">
      <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-logo.svg" alt="corner cafe logo">
    </a>
  </div>
    <?php if(has_nav_menu('primary_navigation')): ?>
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-nav']); ?>

    <?php endif; ?>
  <div class="nav__right">
    <div class="nav__right--top">
      <a href="/order-online" class="button-slant button-left"><span>order online</span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
    </div>
    <div class="nav__right--bottom">
      <div class="location"><a href="/contact#locations">find a location</a></div>
      <div class="search"><span>|</span><i class="search-icon far fa-search"></i><?php echo e(get_search_form()); ?></div>
    </div>
  </div>
</nav>

<div class="mobile-nav">
  <div class="top-bar">
    <a href="/">
      <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-logo.svg" alt="corner cafe logo">
    </a>
    <div class="button-hamburger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
  </div>
  <div class="nav-panel">
    <div class="mobile-search">
      <div><?php echo e(get_search_form()); ?></div>
    </div>
    <?php if(has_nav_menu('primary_navigation')): ?>
    <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-nav']); ?>

    <?php endif; ?>
    <div class="button-primary"><a href="/contact#locations">find a location</a></div>
  <div class="nav-panel-buttons">
      <a href="/order-online" class="button-slant"><span>order online</span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
  </div>
  </div>
</div>
  