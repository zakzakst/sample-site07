/**
 * モジュール読み込み
 */
const { src, dest } = require('gulp');
const plumber = require('gulp-plumber');
const sassGlob = require('gulp-sass-glob-use-forward');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const stylelint = require('stylelint');

/**
 * 変数設定
 */
const files = ['./src/sass/*.scss', '!./src/sass/_*.scss'];
const dist = './dist/css';
// const dist = './wordpress-theme/css';
const sassConf = {
  outputStyle: 'compressed',
};
const postcssPlugin = [
  autoprefixer(),
  stylelint({
    fix: true,
  }),
];

/**
 * 関数
 */
const SASS_BUILD = () => {
  return src(files)
    .pipe(plumber())
    .pipe(sassGlob())
    .pipe(sass(sassConf))
    .pipe(postcss(postcssPlugin))
    .pipe(dest(dist));
};

module.exports = { SASS_BUILD };
