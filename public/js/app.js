/* global google*/
google.charts.load('current', {
  'packages':['geochart'],
});

google.charts.setOnLoadCallback(drawRegionsMap);

function selectHandler(reg) {
  const countrycode = reg.region;
  window.location.href = "/countries/" + countrycode;
}


function drawRegionsMap() {
  const codes = [
    //europe
    ['Country', 'Name'],
    ['AL', 'アルバニア'],
    ['AD', 'アンドラ'],
    ['AG', 'アンティグア バーブーダ'],
    ['AM', 'アルメニア'],
    ['AT', 'オーストリア'],
    ['AZ', 'アゼルバイジャン'],
    ['BY', 'ベラルーシ'],
    ['BE', 'ベルギー'],
    ['BA', 'ボスニア ヘルツェゴビナ'],
    ['BG', 'ブルガリア'],
    ['HR', 'クロアチア'],
    ['CZ', 'チェコ'],
    ['DK', 'デンマーク'],
    ['EE', 'エストニア'],
    ['FO', 'フェロー諸島'],
    ['FI', 'フィンランド'],
    ['FR', 'フランス'],
    ['GE', 'ジョージア'],
    ['DE', 'ドイツ'],
    ['GI', 'ジブラルタル'],
    ['GR', 'ギリシャ'],
    ['GL', 'グリーンランド'],
    ['GG', 'ガーンジー'],
    ['HU', 'ハンガリー'],
    ['IS', 'アイスランド'],
    ['IE', 'アイルランド'],
    ['IM', 'マン島'],
    ['IT', 'イタリア'],
    ['JE', 'ジャージー'],
    ['LV', 'ラトビア'],
    ['LI', 'リヒテンシュタイン'],
    ['LT', 'リトアニア'],
    ['LU', 'ルクセンブルク'],
    ['MD', 'モルドバ'],
    ['MC', 'モナコ'],
    ['ME', 'モンテネグロ'],
    ['NL', 'オランダ'],
    ['MK', '北マケドニア'],
    ['NO', 'ノルウェー'],
    ['PL', 'ポーランド'],
    ['PT', 'ポルトガル'],
    ['RO', 'ルーマニア'],
    ['SM', 'サンマリノ'],
    ['RS', 'セルビア'],
    ['SK', 'スロバキア'],
    ['SI', 'スロベニア'],
    ['ES', 'スペイン'],
    ['SJ', 'スヴァールバル諸島およびヤンマイエン島'],
    ['SE', 'スウェーデン'],
    ['CH', 'スイス'],
    ['UA', 'ウクライナ'],
    ['GB', '英国'],
    ['VA', 'バチカン市国'],
    ['AX', 'オーランド諸島'],
    ['XK', 'コソボ'],
    //asia
    ['BD', 'バングラデシュ'],
    ['BT', 'ブータン'],
    ['BN', 'ブルネイ'],
    ['KH', 'カンボジア'],
    ['CN', '中国'],
    ['HK', '香港'],
    ['IN', 'インド'],
    ['ID', 'インドネシア'],
    ['JP', '日本'],
    ['KZ', 'カザフスタン'],
    ['KG', 'キルギス'],
    ['LA', 'ラオス'],
    ['MO', 'マカオ'],
    ['MY', 'マレーシア'],
    ['MN', 'モンゴル'],
    ['MM', 'ミャンマー'],
    ['NP', 'ネパール'],
    ['KP', '北朝鮮'],
    ['PK', 'パキスタン'],
    ['PH', 'フィリピン'],
    ['SG', 'シンガポール'],
    ['KR', '韓国'],
    ['LK', 'スリランカ'],
    ['TW', '台湾'],
    ['TJ', 'タジキスタン'],
    ['TH', 'タイ'],
    ['TL', '東ティモール'],
    ['TM', 'トルクメニスタン'],
    ['UZ', 'ウズベキスタン'],
    ['VN', 'ベトナム'],
    //Russia
    ['RU', 'ロシア'],
  ];
  const data = google.visualization.arrayToDataTable(codes);
  const options = {
    defaultColor:'#3cb371',
  };
  const chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
  google.visualization.events.addListener(chart, 'regionClick', selectHandler);
  chart.draw(data, options);
}