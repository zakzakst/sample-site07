<?php
  $FOOTER_ITEMS = array(
    array(
      'href' => '#',
      'label' => 'トップ',
    ),
    array(
      'href' => '#',
      'label' => 'ニュース一覧',
    ),
    array(
      'href' => '#',
      'label' => 'イベント一覧',
    ),
    array(
      'href' => '#',
      'label' => 'お問い合わせ',
    ),
  );
?>

<!-- ▼▼▼ フッター ▼▼▼ -->
<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <ul class="footer__links">
        <?php foreach ($FOOTER_ITEMS as $ITEM) : ?>
          <li><a href="<?php echo $ITEM['href']; ?>" class="footer__link"><?php echo $ITEM['label']; ?></a></li>
        <?php endforeach; ?>
      </ul>
      <p class="footer__copy">Copyright &copy;XXXXX. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<!-- ▲▲▲ フッター ▲▲▲ -->