<?php get_header(); ?>

<?php
  $title = get_the_title();
  $HERO_ITEM = array(
    'title' => $title,
    'img' => 'https://picsum.photos/id/249/1200/400',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="container layout has-aside">
  <main class="layout__main">
    <div class="content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <h2>投稿が見つかりません。</h2>
      <?php endif; ?>
    </div>
  </main>
  <aside class="layout__aside">
    <?php get_sidebar(); ?>
  </aside>
</div>
<?php get_template_part('partials/contact'); ?>

<?php get_footer();