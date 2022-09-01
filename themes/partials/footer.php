<?php
  $FOOTER_ITEMS = GET_MENU_ITEMS('footer_links');
?>

<!-- ▼▼▼ フッター ▼▼▼ -->
<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <ul class="footer__links">
        <?php foreach ($FOOTER_ITEMS as $ITEM) : ?>
          <li><a href="<?php echo $ITEM->url; ?>" class="footer__link"><?php echo $ITEM->title; ?></a></li>
        <?php endforeach; ?>
      </ul>
      <p class="footer__copy">Copyright &copy;XXXXX. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<!-- ▲▲▲ フッター ▲▲▲ -->