串接行政院農委會(http://data.coa.gov.tw/)的OpenData地方美食資料
http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

1.Bootstrap_localfood.php 
 ---運用 Bootstrap + jquery 為框架 CSS3 為輔，製作呈現

2.jquery_listview+popup-food.php
 ---運用 jquery 的 Listview 為框架 popup 為輔，製作呈現

3.GetOpendataToJson_api.php
 ---運用 php 跨網域 串接 OpenData 取得 JSON 資料
 ---如果因網頁讀取速度過慢影響資料載入：請將js資料夾中的 script.js:6 中的url:"GetOpendataToJson_api.php" 更改為 url:"json/food.php" 按F5重整即可