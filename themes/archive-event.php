<?php get_header(); ?>

<?php
  $title = get_the_archive_title();
  $HERO_ITEM = array(
    'title' => 'イベント一覧',
    'img' => 'https://picsum.photos/id/249/1200/400',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="container layout has-aside">
  <main class="layout__main">
    <?php if (have_posts()) : ?>
      <ul class="event-list">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('partials/event-list-item', null); ?>
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