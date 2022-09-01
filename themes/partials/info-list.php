<div class="info-list">
  <?php foreach ($args['items'] as $ITEM) : ?>
    <dl class="info-list__item">
      <dt><?php echo $ITEM['term']; ?></dt>
      <dd><?php echo $ITEM['description']; ?></dd>
    </dl>
  <?php endforeach; ?>
</div>