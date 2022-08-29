<?php
$SIDEBAR_ITEMS = array(
  array(
    'href' => '#',
    'label' => 'サイドバー01',
  ),
  array(
    'href' => '#',
    'label' => 'サイドバー02',
  ),
  array(
    'href' => '#',
    'label' => 'サイドバー03',
  ),
  array(
    'href' => '#',
    'label' => 'サイドバー04',
  ),
  array(
    'href' => '#',
    'label' => 'サイドバー05',
  ),
);
?>

<!-- ▼▼▼ サイドバー ▼▼▼ -->
<ul class="sidebar">
  <?php foreach ($SIDEBAR_ITEMS as $ITEM) : ?>
    <li class="sidebar__item">
      <a href="<?php echo $ITEM['href']; ?>" class="sidebar__item-link"><?php echo $ITEM['label']; ?></a>
    </li>
  <?php endforeach; ?>
</ul>
<!-- ▲▲▲ サイドバー ▲▲▲ -->