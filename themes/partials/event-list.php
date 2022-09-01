<ul class="event-list">
  <?php foreach ($args['items'] as $ITEM) : ?>
    <li class="event-list__item">
      <a href="<?php echo $ITEM['href']; ?>">
        <div class="event-list__item-head">
          <img src="<?php echo $ITEM['img']; ?>" alt="" width="240" height="120">
          <span><?php echo $ITEM['date']; ?></span>
        </div>
        <div class="event-list__item-body">
          <h3 class="event-list__item-title"><?php echo $ITEM['title']; ?></h3>
          <p class="event-list__item-text"><?php echo $ITEM['text']; ?></p>
        </div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>