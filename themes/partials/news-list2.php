<?php
  $queryArgs = array(
    'orderby' => 'date',
    'order' => 'DESC',
  );
  if (isset($args['page'])) {
    $queryArgs['posts_per_page'] = $args['page'];
  }
  $new_query = new WP_Query($queryArgs);
  if ($new_query->have_posts()) :
?>
  <ul class="news-list">
    <?php
      while($new_query->have_posts()) :
      $new_query->the_post();
      $category = get_the_category();
    ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="news-list__item">
          <div class="news-list__head">
            <span class="news-list__head-category"><?php echo $category[0]->cat_name; ?></span>
            <span class="news-list__head-date"><?php echo get_the_date(); ?></span>
          </div>
          <div class="news-list__text"><?php the_title(); ?></div>
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