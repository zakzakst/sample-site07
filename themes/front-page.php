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

<?php get_footer();