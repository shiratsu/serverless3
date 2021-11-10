<?php
header('Content-Type: text/html; charset=utf-8');

$dns = 'mysql:host=aurora-serverless.cluster-cjz1okxlbysw.ap-northeast-1.rds.amazonaws.com;dbname=aurora_test';
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
    <ul>
    <?php while($row = $stmt->fetch()): ?>
        <li><?php echo 'id:' . $row['id'] . ', name: ' . $row['name'] ?></li>
    <?php endwhile; ?>
    </ul>
</html>