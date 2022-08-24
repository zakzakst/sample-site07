'use strict';

// ローダースクリプトの実行
import { Loader } from './modules/loader';
() => {
  const loader = new Loader(() => {
    console.log('ロード完了');
  });
  loader.init();
};

// ヘッダースクリプトの実行
import { Header } from './modules/header';
(() => {
  const header = new Header();
  header.init();
})();
