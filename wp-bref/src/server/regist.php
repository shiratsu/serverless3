<?php
header('Content-Type: text/html; charset=utf-8');

$dns = 'mysql:host=wp-seerverless.cluster-cdpgugtn4mfy.ap-northeast-1.rds.amazonaws.com;dbname=aurora_test';
$username = 'admin';
$password = 'shun0509shun0509';
$driver_options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dns, $username, $password, $driver_options);

print_r($_POST);
print_r($_GET);

if(!empty($_POST["name"]) && !empty($_POST["id"])){

  $stmt = $pdo->query("SELECT * FROM test");

  $stmt = $pdo -> prepare("INSERT INTO test (id, name) VALUES (:id, :name)");
  $stmt->bindParam(':id', $_GET["id"], PDO::PARAM_INT);
  $stmt->bindValue(':name', $_GET["name"], PDO::PARAM_STR);
  $stmt->execute();

  header('Location: /Prod/aurora_test.php');

}


?>

<html>
<head>
</head>
<body>
<form action="/Prod/regist.php" method="POST">
ID:<input type="text" name="id">
name:<input type="text" name="name">
<br>
<input type="submit" value="登録">
</body>
</html>

