<?php
  // TODO: 近日開催のデータを取得する
  $queryArgs = array(
    'post_type' => 'event',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  if (isset($args['page'])) {
    $queryArgs['posts_per_page'] = $args['page'];
  }
  $new_query = new WP_Query($queryArgs);
  if ($new_query->have_posts()) :
?>
  <ul class="event-list">
    <?php
      while($new_query->have_posts()) :
      $new_query->the_post();
    ?>
      <li class="event-list__item">
        <a href="<?php the_permalink(); ?>">
          <div class="event-list__item-head">
            <?php
              if (has_post_thumbnail()) :
              $THUMBNAIL_URL = get_the_post_thumbnail_url();
              $THUMBNAIL_ID = get_post_thumbnail_id($post->ID);
              $THUMBNAIL_ALT = get_post_meta($THUMBNAIL_ID, '_wp_attachment_image_alt', true);
            ?>
              <img src="<?php echo $THUMBNAIL_URL; ?>" alt="<?php echo $THUMBNAIL_ALT; ?>" width="240" height="120" />
            <?php else : ?>
              <img src="https://placehold.jp/480x240.png?text=no+image" alt="NO IMAGE" width="240" height="120" />
            <?php endif; ?>
            <span><?php echo get_the_date(); ?></span>
          </div>
          <div class="event-list__item-body">
            <h3 class="event-list__item-title"><?php the_title(); ?></h3>
            <p class="event-list__item-text">イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。<br>イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。</p>
          </div>
        </a>
      </li>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php else : ?>
  <p>投稿はありません。</p>
<?php endif; ?>