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

// トップへ戻るスクリプトの実行
import { GoTop } from './modules/go-top';
(() => {
  const goTop = new GoTop();
  goTop.init();
})();
