<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => 'ニュース一覧',
    'img' => 'https://picsum.photos/id/249/1200/400',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="container layout has-aside">
  <main class="layout__main">
    <?php if (have_posts()) : ?>
      <ul class="news-list">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('partials/news-list-item', null, array(
            'post' => $post,
          )); ?>
        <?php endwhile; ?>
      </ul>
      <?php get_template_part('partials/pagination'); ?>
    <?php else : ?>
      <h2>投稿が見つかりません。</h2>
    <?php endif; ?>
  </main>
  <aside class="layout__aside">
    <?php get_sidebar(); ?>
  </aside>
</div>
<?php get_template_part('partials/contact'); ?>

<?php get_footer();