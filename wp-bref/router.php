<?php

declare(strict_types=1);

require 'vendor/autoload.php';

if (isset($_GET['sleep'])) {
    sleep(10);
}

if (isset($_GET['img'])) {
    $fp = fopen('https://bref.sh/img/logo-small.png', 'rb');
    header('Content-Type: image/png');
    fpassthru($fp);
    exit(0);
}

if (isset($_GET['json'])) {
    header('Content-Type: application/json');
    echo json_encode(['Hello' => '🌍']);
    exit(0);
}

if (isset($_GET['weird'])) {
    header('Content-Type: foo/bar');
    echo 'Hello 🌍';
    exit(0);
}

if (isset($_GET['phpinfo'])) {
    phpinfo();
    exit(0);
}

if (isset($_GET['tmp'])) {
    file_put_contents('/tmp/test.txt', 'hello');
    echo file_get_contents('/tmp/test.txt');
    exit(0);
}

// if($_SERVER['SCRIPT_NAME'] == "phpinfo.php"){
//   require 'phpinfo.php';
//   return;
// }else if($_SERVER['SCRIPT_NAME'] == "aurora_test.php"){
//     require 'aurora_test.php';
//     return;
// }else if($_SERVER['SCRIPT_NAME'] == "regist.php"){
//     require 'regist.php';
//     return;
// }else{
//   // Run index.php for all requests
//   $_SERVER['SCRIPT_NAME'] = '/index.php';
//   require 'index.php';
// }

