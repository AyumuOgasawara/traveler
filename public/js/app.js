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
    ['Country', 'Name'],
    ['Germany', 'ドイツ'],
    ['United States', 'アメリカ'],
    ['Brazil', 'ブラジル'],
    ['Canada', 'カナダ'],
    ['France', 'フランス'],
    ['RU', 'ロシア'],
    ['JP', 'にほん'],
    ['GB', 'イギリス'],
    ['IS', 'アイスランド']
  ];
  const data = google.visualization.arrayToDataTable(codes);
  const options = {
    defaultColor:'#3cb371',
  };
  const chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
  google.visualization.events.addListener(chart, 'regionClick', selectHandler);
  chart.draw(data, options);
}