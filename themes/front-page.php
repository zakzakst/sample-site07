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

<!-- ▼▼▼ イベント ▼▼▼ -->
<?php
  $EVENT_LIST_ITEMS = array(
    array(
      'href' => '#',
      'img' => 'https://picsum.photos/id/10/480/240',
      'date' => '2021.01.01',
      'title' => 'イベント名が入ります。イベント名が入ります。',
      'text' => 'イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。',
    ),
    array(
      'href' => '#',
      'img' => 'https://picsum.photos/id/1000/480/240',
      'date' => '2021.01.02',
      'title' => 'イベント名が入ります。イベント名が入ります。',
      'text' => 'イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。<br>イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。',
    ),
    array(
      'href' => '#',
      'img' => 'https://picsum.photos/id/1011/480/240',
      'date' => '2021.01.03',
      'title' => 'イベント名が入ります。イベント名が入ります。',
      'text' => 'イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。',
    ),
    array(
      'href' => '#',
      'img' => 'https://picsum.photos/id/1016/480/240',
      'date' => '2021.01.04',
      'title' => 'イベント名が入ります。イベント名が入ります。',
      'text' => 'イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。<br>イベント概要が入ります。イベント概要が入ります。イベント概要が入ります。',
    ),
  );
?>
<div class="top-event">
  <section class="container js-scroll-anim">
    <div class="top-event__inner">
      <div class="top-event__lead">
        <?php get_template_part('partials/lead', null, array(
          'heading' => 'イベント',
          'shoulder' => 'EVENT',
          'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
          'align' => 'right',
        )); ?>
      </div>
      <div class="top-event__content">
        <?php get_template_part('partials/event-list', null, array(
          'items' => $EVENT_LIST_ITEMS,
        )); ?>
      </div>
      <div class="top-event__button">
        <?php get_template_part('partials/button', null, array(
          'href' => '#',
          'text' => 'イベント一覧',
          'align' => 'right',
        )); ?>
      </div>
    </div>
  </section>
</div>
<!-- ▲▲▲ イベント ▲▲▲ -->

<!-- ▼▼▼ ポイント ▼▼▼ -->
<?php
  $POINT_ITEMS = array(
    array(
      'shoulder' => 'POINT 01',
      'heading' => '見出しが入ります',
      'text' => '<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>',
      'img' => 'img_01.jpg',
    ),
    array(
      'shoulder' => 'POINT 02',
      'heading' => '見出しが入ります',
      'text' => '<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>',
      'img' => 'img_02.jpg',
    ),
    array(
      'shoulder' => 'POINT 03',
      'heading' => '見出しが入ります',
      'text' => '<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>',
      'img' => 'img_03.jpg',
    ),
  );
?>
<div class="top-point__wrapper">
  <div class="container">
    <?php foreach ($POINT_ITEMS as $ITEM) : ?>
      <div class="top-point js-scroll-anim">
        <div class="top-point__content">
          <p class="top-point__shoulder"><span><?php echo $ITEM['shoulder']; ?></span></p>
          <h3 class="top-point__heading"><?php echo $ITEM['heading']; ?></h3>
          <div class="top-point__text"><?php echo $ITEM['text']; ?></div>
        </div>
        <div class="top-point__img">
          <img src="<?php echo get_stylesheet_directory_uri() . '/img/top/point/' . $ITEM['img']; ?>" alt="">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- ▲▲▲ ポイント ▲▲▲ -->

<!-- ▼▼▼ アクセス ▼▼▼ -->
<?php
  $INFO_LIST_ITEMS = array(
    array(
      'term' => '項目名1',
      'description' => 'テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'term' => '項目名2',
      'description' => 'テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'term' => '項目名3',
      'description' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'term' => '項目名4',
      'description' => 'テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
    array(
      'term' => '項目名5',
      'description' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
    ),
  );
?>
<div class="top-access">
  <section class="container js-scroll-anim">
    <div class="top-access__inner">
      <div class="top-access__lead">
        <?php get_template_part('partials/lead', null, array(
          'heading' => 'アクセス',
          'shoulder' => 'ACCESS',
          'text' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
          'align' => '',
        )); ?>
      </div>
      <div class="top-access__content">
        <?php get_template_part('partials/info-list', null, array(
          'items' => $INFO_LIST_ITEMS,
        )); ?>
      </div>
    </div>
    <div class="top-access__map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.0459159529737!2d139.80315461529614!3d35.74967618017841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e4fa6644e8d%3A0x6bc4e612ab55d171!2z5YyX5Y2D5L2P6aeF!5e0!3m2!1sja!2sjp!4v1611569782550!5m2!1sja!2sjp"
        width="100%"
        height="300"
        frameborder="0"
        style="border:0;"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
  </section>
</div>
<!-- ▲▲▲ アクセス ▲▲▲ -->

<!-- ▼▼▼ FAQ ▼▼▼ -->
<?php
  $FAQ_ITEMS = array(
    array(
      'categoryLabel' => '○○について',
      'contents' => array(
        array(
          'question' => '○○について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '○○について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '○○について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '○○について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
      ),
    ),
    array(
      'categoryLabel' => '××について',
      'contents' => array(
        array(
          'question' => '××について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '××について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '××について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
      ),
    ),
    array(
      'categoryLabel' => '□□について',
      'contents' => array(
        array(
          'question' => '□□について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '□□について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '□□について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '□□について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
      ),
    ),
    array(
      'categoryLabel' => '△△について',
      'contents' => array(
        array(
          'question' => '△△について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
        array(
          'question' => '△△について質問が入ります。',
          'answer' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
        ),
      ),
    ),
  );
?>
<div class="top-faq__wrapper">
  <div class="container">
    <div class="top-faq">
      <ul class="top-faq__tab">
        <?php foreach ($FAQ_ITEMS as $INDEX => $ITEM) : ?>
          <li class="top-faq__tab-item" data-target-index="<?php echo $INDEX; ?>"><?php echo $ITEM['categoryLabel']; ?></li>
        <?php endforeach; ?>
      </ul>
      <div class="top-faq__contents">
        <?php foreach ($FAQ_ITEMS as $ITEM) : ?>
          <div class="top-faq__content">
            <?php foreach ($ITEM['contents'] as $CONTENT) : ?>
              <div class="top-faq__content-item">
                <h3 class="top-faq__content-question"><?php echo $CONTENT['question']; ?></h3>
                <p class="top-faq__content-answer"><?php echo $CONTENT['answer']; ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- ▲▲▲ FAQ ▲▲▲ -->

<?php get_footer();