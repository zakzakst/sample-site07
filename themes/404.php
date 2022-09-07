<?php get_header(); ?>

<?php
  // TODO: タイトルタグに表示する文言と共通管理できないか？
  $HERO_ITEM = array(
    'title' => 'お探しのページは見つかりませんでした',
    'img' => 'https://picsum.photos/id/249/1200/400',
  );
  get_template_part('partials/hero', null, $HERO_ITEM);
?>
<div class="container layout has-aside">
  <main class="layout__main">
    <div class="content">
      <h2>投稿が見つかりません。</h2>
    </div>
  </main>
  <aside class="layout__aside">
    <?php get_sidebar(); ?>
  </aside>
</div>
<?php get_template_part('partials/contact'); ?>

<?php get_footer();