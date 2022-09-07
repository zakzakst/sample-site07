<?php
  $SITEMAP_ITEMS = GET_MENU_ITEMS('sitemap_links');
?>

<ul>
  <?php foreach ($SITEMAP_ITEMS as $ITEM) : ?>
    <li>
      <a href="<?php echo $ITEM->url; ?>"><?php echo $ITEM->title; ?></a>
    </li>
  <?php endforeach; ?>
</ul>