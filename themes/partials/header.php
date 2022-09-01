<?php
  $HEADER_ITEMS = GET_MENU_ITEMS('header_links');
?>

<!-- ▼▼▼ ヘッダー ▼▼▼ -->
<header class="header">
  <div class="header-button__wrapper js-fix-content">
    <a href="#" id="js-header-button" class="header-button">
      <div class="header-button__bar">
        <div class="header-button__bar-item"></div>
        <div class="header-button__bar-item"></div>
        <div class="header-button__bar-item"></div>
      </div>
    </a>
  </div>
  <div id="js-header-menu" class="header-menu js-fix-content">
    <ul class="header-menu__items">
      <?php foreach ($HEADER_ITEMS as $ITEM) : ?>
        <li>
          <a href="<?php echo $ITEM->url; ?>" class="header-menu__item"><?php echo $ITEM->title; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>
<!-- ▲▲▲ ヘッダー ▲▲▲ -->