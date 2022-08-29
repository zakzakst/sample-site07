<?php
  $HEADER_ITEMS = array(
    array(
      'href' => '#',
      'label' => 'TOP',
    ),
    array(
      'href' => '#',
      'label' => 'NEWS',
    ),
    array(
      'href' => '#',
      'label' => 'EVENT',
    ),
    array(
      'href' => '#',
      'label' => 'CONTACT',
    ),
  );
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
          <a href="<?php echo $ITEM['href']; ?>" class="header-menu__item"><?php echo $ITEM['label']; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>
<!-- ▲▲▲ ヘッダー ▲▲▲ -->