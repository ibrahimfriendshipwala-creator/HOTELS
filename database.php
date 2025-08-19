<?php
$host = 'localhost';
$dbname = 'dbkzzfosazgidr';
$username = 'udg55r6gw7kdk';
$password = 'mehagkamqn56';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Connected!";
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}
?>
