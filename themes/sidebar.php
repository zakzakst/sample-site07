<!-- ▼▼▼ サイドバー ▼▼▼ -->
<ul class="sidebar">
  <?php
    $post_type = get_post_type();
    if ($post_type == 'event' || $post_type == 'post') :
  ?>
    <?php
      $queryArgs = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5,
      );
      if ($post_type == 'event') {
        $queryArgs['post_type'] = $post_type;
      }
      $new_query = new WP_Query($queryArgs);
      if ($new_query->have_posts()) :
    ?>
      <?php
        while($new_query->have_posts()) :
        $new_query->the_post();
      ?>
        <li class="sidebar__item">
          <a href="<?php echo the_permalink(); ?>" class="sidebar__item-link"><?php echo the_title(); ?></a>
        </li>
      <?php
        endwhile;
        wp_reset_postdata();
      ?>
    <?php else : ?>
      <!-- <p>投稿なし</p> -->
    <?php endif; ?>
  <?php else : ?>
    <?php
      $LINK_ITEMS = GET_MENU_ITEMS('side_links');
      foreach ($LINK_ITEMS as $ITEM) :
    ?>
      <li class="sidebar__item">
        <a href="<?php echo $ITEM->url; ?>" class="sidebar__item-link"><?php echo $ITEM->title; ?></a>
      </li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
<!-- ▲▲▲ サイドバー ▲▲▲ -->