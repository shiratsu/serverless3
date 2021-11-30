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

$stmt = $pdo->query("SELECT * FROM test");
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
</script>
</head>
<a href="regist.php">登録画面</a>
<ul>
<?php while($row = $stmt->fetch()): ?>
    <li><?php echo 'id:' . $row['id'] . ', name: ' . $row['name'] ?></li><>
<?php endwhile; ?>
</ul>
</html>
