<?php

// // if (isset($_GET['sleep'])) {
// //     sleep(10);
// // }

// // if (isset($_GET['img'])) {
// //     $fp = fopen('https://bref.sh/img/logo-small.png', 'rb');
// //     header('Content-Type: image/png');
// //     fpassthru($fp);
// //     exit(0);
// // }

// // if (isset($_GET['json'])) {
// //     header('Content-Type: application/json');
// //     echo json_encode(['Hello' => '🌍']);
// //     exit(0);
// // }

// // if (isset($_GET['weird'])) {
// //     header('Content-Type: foo/bar');
// //     echo 'Hello 🌍';
// //     exit(0);
// // }

// // if (isset($_GET['phpinfo'])) {
// //     phpinfo();
// //     exit(0);
// // }

// // if (isset($_GET['tmp'])) {
// //     file_put_contents('/tmp/test.txt', 'hello');
// //     echo file_get_contents('/tmp/test.txt');
// //     exit(0);
// // }

// // echo 'Hello world!';

// lambda(function (array $event) {
//     // なにか処理
//     // /**
//     //  * Tells WordPress to load the WordPress theme and output it.
//     //  *
//     //  * @var bool
//     //  */
//     // define( 'WP_USE_THEMES', true );

//     // /** Loads the WordPress Environment and Template */
//     // require __DIR__ . '/wp-blog-header.php';
//     header('Content-Type: text/html');
//     echo "hello world";
//     exit(0);
// });
// print_r($_SERVER);
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/src/server/wp-blog-header.php';

