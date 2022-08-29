<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php
    // TODO: includeでなくget_template_part使う
    // include('components/head/meta.php');
    // include('components/head/ogp.php');
    // include('components/head/schema.php');
    // カスタムフィールドのタイトル・ディスクリプションを設定
    get_template_part('partials/page-loader-head');
    wp_head();
  ?>
</head>
<body <?php body_class(); ?>>
<?php
  get_template_part('partials/page-loader');
  get_template_part('partials/header');