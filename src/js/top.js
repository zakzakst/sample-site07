'use strict';

// FAQスクリプトの実行
import { TopFaq } from './modules/top/faq';
(() => {
  const topFaq = new TopFaq();
  topFaq.init();
})();
