<!-- ▼▼▼ 前後投稿リンク ▼▼▼ -->
<div class="next-prev">
  <?php
    $prev_post = get_previous_post();
    if (!empty($prev_post)) :
    $url = get_permalink($prev_post->ID);
    $title = $prev_post->post_title;
  ?>
    <a href="<?php echo $url; ?>" class="next-prev__link is-prev"><?php echo $title; ?></a>
  <?php endif ?>
  <?php
    $next_post = get_next_post();
    if (!empty($next_post)) :
    $url = get_permalink($next_post->ID);
    $title = $next_post->post_title;
  ?>
    <a href="<?php echo $url; ?>" class="next-prev__link is-next"><?php echo $title; ?></a>
  <?php endif ?>
</div>
<!-- ▲▲▲ 前後投稿リンク ▲▲▲ -->