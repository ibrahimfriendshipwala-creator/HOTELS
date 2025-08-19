<?php
// listings.php
$location = $_GET['location'] ?? '';
$checkin = $_GET['checkin'] ?? '';
$checkout = $_GET['checkout'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Listings - <?= htmlspecialchars($location) ?></title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f8ff;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #003580;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
    .results {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
    }
    .hotel {
      background: white;
      margin-bottom: 20px;
      display: flex;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .hotel img {
      width: 200px;
      height: 150px;
      object-fit: cover;
    }
    .info {
      padding: 15px;
      flex: 1;
    }
    .info h3 {
      margin-top: 0;
      color: #003580;
    }
    .book-btn {
      background: #003580;
      color: white;
      padding: 10px 15px;
      text-align: center;
      border-radius: 5px;
      margin-top: 10px;
      display: inline-block;
      cursor: pointer;
    }
    .book-btn:hover {
      background: #002b66;
    }
  </style>
</head>
<body>

<header>
  Hotels in <?= htmlspecialchars($location) ?> | <?= $checkin ?> to <?= $checkout ?>
</header>

<div class="results">
  <?php
  // Simulate hotel listings (Normally fetch from DB)
  $hotels = [
    ['id' => 1, 'name' => 'Sunset Inn', 'price' => '8500', 'img' => 'https://source.unsplash.com/400x300/?hotel,1'],
    ['id' => 2, 'name' => 'Grand Vista', 'price' => '12900', 'img' => 'https://source.unsplash.com/400x300/?hotel,2'],
    ['id' => 3, 'name' => 'Skyline Suites', 'price' => '9900', 'img' => 'https://source.unsplash.com/400x300/?hotel,3'],
  ];

  foreach ($hotels as $hotel): ?>
    <div class="hotel">
      <img src="<?= $hotel['img'] ?>" alt="Hotel Image">
      <div class="info">
        <h3><?= $hotel['name'] ?></h3>
        <p>Beautiful hotel located in <?= htmlspecialchars($location) ?>.</p>
        <p><strong>PKR <?= $hotel['price'] ?>/night</strong></p>
        <div class="book-btn" onclick="redirectToBooking(<?= $hotel['id'] ?>)">Book Now</div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>
function redirectToBooking(id) {
  const params = new URLSearchParams(window.location.search);
  window.location.href = `book.php?id=${id}&location=${params.get('location')}&checkin=${params.get('checkin')}&checkout=${params.get('checkout')}`;
}
</script>

</body>
</html>
