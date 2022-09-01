<?php get_header(); ?>

<!-- ▼▼▼ ヒーロー ▼▼▼ -->
<?php
  $HERO_ITEMS = array(
    array(
      'src' => 'mv_01.jpg',
    ),
    array(
      'src' => 'mv_02.jpg',
    ),
    array(
      'src' => 'mv_03.jpg',
    ),
  );
?>
<div class="top-hero__wrapper">
  <div class="container">
    <div class="top-hero" id="js-top-hero">
      <div class="top-hero__content">
        <h1 class="top-hero__title">
          <span class="top-hero__title-line"><span>ここに</span></span>
          <span class="top-hero__title-line"><span>タイトルが</span></span>
          <span class="top-hero__title-line"><span>入ります</span></span>
        </h1>
        <p class="top-hero__lead"><span>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span></p>
      </div>
      <div class="top-hero__mv-wrapper">
        <div class="top-hero__mv">
          <?php foreach ($HERO_ITEMS as $ITEM) : ?>
            <div class="top-hero__mv-item">
              <div class="top-hero__mv-img-container">
                <div class="top-hero__mv-img" data-img-src="<?php echo get_stylesheet_directory_uri() . '/img/top/hero/' . $ITEM['src']; ?>"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ▲▲▲ ヒーロー ▲▲▲ -->

<!-- ▼▼▼ ニュース ▼▼▼ -->
<?php
  $NEWS_LIST_ITEMS = array(
    array(
      'href' => '#',
      'category' => 'お知らせ',
      'date' => '2021.01.01',
      'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'href' => '#',
      'category' => 'コラム',
      'date' => '2021.01.02',
      'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'href' => '#',
      'category' => 'ブログ',
      'date' => '2021.01.03',
      'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
  );
?>
<div class="top-news">
  <section class="container js-scroll-anim">
    <div class="top-news__inner">
      <div class="top-news__lead">
        <?php get_template_part('partials/lead', null, array(
          'heading' => 'ニュース',
          'shoulder' => 'NEWS',
          'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。',
          'align' => '',
        )); ?>
      </div>
      <div class="top-news__content">
        <?php get_template_part('partials/news-list', null, array(
          'items' => $NEWS_LIST_ITEMS,
        )); ?>
      </div>
      <div class="top-news__button">
        <?php get_template_part('partials/button', null, array(
          'href' => '#',
          'text' => 'ニュース一覧',
          'align' => '',
        )); ?>
      </div>
    </div>
  </section>
</div>
<!-- ▲▲▲ ニュース ▲▲▲ -->
<?php get_footer();