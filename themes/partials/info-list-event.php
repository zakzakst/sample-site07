<?php
  global $post;
  $date = get_post_meta($post->ID, 'date', true)
    ? get_post_meta($post->ID, 'date', true)
    : '---';
  $price = get_post_meta($post->ID, 'price', true)
    ? get_post_meta($post->ID, 'price', true)
    :'---';
  $caution = get_post_meta($post->ID, 'caution', true)
    ? get_post_meta($post->ID, 'caution', true)
    : '---';
?>
<div class="info-list">
  <dl class="info-list__item">
    <dt>開催日</dt>
    <dd><?php echo $date; ?></dd>
  </dl>
  <dl class="info-list__item">
    <dt>参加費</dt>
    <dd><?php echo $price; ?></dd>
  </dl>
  <dl class="info-list__item">
    <dt>注意事項</dt>
    <dd><?php echo $caution; ?></dd>
  </dl>
</div>