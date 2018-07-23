<?php
$route = new Router(Request::uri()); //搭配 .htaccess 排除資料夾名稱後解析 URL
$route->getParameter(1); // 從 http://127.0.0.1/game/aaa/bbb 取得 aaa 字串之意

// 用參數決定載入某頁並讀取需要的資料
switch($route->getParameter(1)){
    case "list":
      // 讀取全英雄列表資料
      // $DAO->query( ...略... );

      include('view/header/header.php'); // 載入共用的頁首
      include('view/body/list.php');
      include('view/footer/footer.php'); // 載入共用的頁尾
    break;

    case "hero":
      // 讀取單一英雄資料
      // $DAO->query( ...略... );

      include('view/header/header.php'); // 載入共用的頁首
      include('view/body/hero.php');
      include('view/footer/footer.php'); // 載入共用的頁尾
    break;

    default:
      include('view/header/header.php'); // 載入共用的頁首
      include('view/body/main.php');
      include('view/footer/footer.php'); // 載入共用的頁尾
    break;
}
?>