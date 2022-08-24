'use strict';

// ヘッダースクリプトの実行
import { Header } from './modules/header';
(() => {
  const header = new Header();
  header.init();
})();
