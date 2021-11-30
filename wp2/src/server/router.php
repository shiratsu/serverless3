<?php

// // All requests through API Gateway are HTTPS.
// $_SERVER['HTTPS'] = 'on';
// $root = $_SERVER['DOCUMENT_ROOT'];

// // REQUEST_URIベースで処理されるので、ここで加工しておく必要がある
// $_SERVER['REQUEST_URI'] = str_replace('/Index', '/Prod/Index', $_SERVER['REQUEST_URI']);
// $urls = parse_url($_SERVER['REQUEST_URI']);

// // 画像その他
// if (preg_match('/\.([a-zA-Z]{2,3})$/', $urls['path'], $matches)) {
//     $mime = [
//         'css' => 'text/css',
//         'js' => 'application/javascript',
//         'png' => 'image/png',
//         'jpeg' => 'image/jpeg',
//         'jpg' => 'image/jpeg',
//         'svg' => 'image/svg+xml',
//         'gif' => 'image/gif',
//         'ico' => 'image/vnd.microsoft.icon',
//     ];
//     if (isset($mime[$matches[1]])) {
//         if (is_readable($root . $urls['path'])) {
//             header('Content-type: ' . $mime[$matches[1]]);
//             readfile($root . $urls['path']);
//         } else {
//             header("HTTP/1.0 404 Not Found");
//         }

//         return true;
//     }
// }

// // ディレクトリアクセスと思われ
// if (substr($urls['path'], -1) == '/') {
//     $file = $root . $urls['path'] . 'index.php';
//     if (file_exists($file)) {
//         require $file;
//         return true;
//     }
// }

// // どれにも該当しないのでそのまま読みこむが正しいかどうかは・・・
// require $root . $urls['path'];
if($_SERVER['SCRIPT_NAME'] == "phpinfo.php"){
  require 'phpinfo.php';
  return;
}else if($_SERVER['SCRIPT_NAME'] == "aurora_test.php"){
    require 'aurora_test.php';
    return;
}else{
  // Run index.php for all requests
  $_SERVER['SCRIPT_NAME'] = '/index.php';
  require 'index.php';
}


?>
