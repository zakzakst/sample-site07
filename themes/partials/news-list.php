<ul class="news-list">
  <?php foreach ($args['items'] as $ITEM) : ?>
    <li>
      <a href="<?php echo $ITEM['href']; ?>" class="news-list__item">
        <div class="news-list__head">
          <span class="news-list__head-category"><?php echo $ITEM['category']; ?></span>
          <span class="news-list__head-date"><?php echo $ITEM['date']; ?></span>
        </div>
        <div class="news-list__text"><?php echo $ITEM['text']; ?></div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>