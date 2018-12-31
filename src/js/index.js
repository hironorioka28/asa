import '../scss/style.scss'

const $ = require('jquery')

$(function () {
  // パラメータからプルダウンメニューの選択状態を決める
  const arg  = new Object;
  const url = location.search.substring(1).split('&');
  for (let i = 0; url[i]; i++) {
      var k = url[i].split('=');
      arg[k[0]] = k[1];
  }
  const id = arg.val;
  $('#contact-select').val(decodeURIComponent(id));
  $('#contact-select').val(id);
});
