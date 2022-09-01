<?php
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