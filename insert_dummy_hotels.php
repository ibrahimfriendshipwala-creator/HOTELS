<?php
require 'database.php';

$hotels = [
  ['Sunset Inn', 'Karachi', 8500],
  ['Grand Vista', 'Lahore', 12900],
  ['Skyline Suites', 'Islamabad', 9900]
];

foreach ($hotels as $hotel) {
  $stmt = $pdo->prepare("INSERT INTO hotels (name, location, price) VALUES (?, ?, ?)");
  $stmt->execute([$hotel[0], $hotel[1], $hotel[2]]);
}

echo "Dummy hotels inserted.";
?>
