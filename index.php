<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Booking Platform</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e6f0ff, #ffffff);
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #003580;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
      font-size: 1.5rem;
    }
    .search-box {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    input, button {
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #003580;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }
    button:hover {
      background-color: #002b66;
    }
    .featured-hotels {
      max-width: 1000px;
      margin: 40px auto;
      padding: 10px;
    }
    .hotel-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin: 20px 0;
      overflow: hidden;
      display: flex;
      flex-direction: row;
    }
    .hotel-card img {
      width: 200px;
      height: 150px;
      object-fit: cover;
    }
    .hotel-details {
      padding: 20px;
      flex: 1;
    }
    .hotel-details h3 {
      margin: 0;
      color: #003580;
    }
  </style>
</head>
<body>

<header>
  🏨 Hotels Booking – Where Comfort Meets Luxury
</header>

<div class="search-box">
  <h2>Find Your Perfect Stay</h2>
  <input type="text" id="location" placeholder="Enter destination (e.g. Karachi, Lahore)" required>
  <input type="date" id="checkin" required>
  <input type="date" id="checkout" required>
  <button onclick="redirectToListings()">Search Hotels</button>
</div>

<div class="featured-hotels">
  <h2>🌟 Featured Hotels</h2>

  <div class="hotel-card">
    <img src="https://source.unsplash.com/400x300/?hotel" alt="Hotel Image">
    <div class="hotel-details">
      <h3>Royal Stay Karachi</h3>
      <p>Luxury hotel with beach view, pool, and fine dining. Rated 4.8 stars ⭐</p>
      <p><strong>PKR 12,500/night</strong></p>
    </div>
  </div>

  <div class="hotel-card">
    <img src="https://source.unsplash.com/400x300/?resort" alt="Hotel Image">
    <div class="hotel-details">
      <h3>Lahore Grand Inn</h3>
      <p>Peaceful resort in the heart of Lahore with 24/7 service. Rated 4.6 stars ⭐</p>
      <p><strong>PKR 9,000/night</strong></p>
    </div>
  </div>
</div>

<script>
function redirectToListings() {
  const location = document.getElementById('location').value;
  const checkin = document.getElementById('checkin').value;
  const checkout = document.getElementById('checkout').value;

  if (location && checkin && checkout) {
    window.location.href = `listings.php?location=${encodeURIComponent(location)}&checkin=${checkin}&checkout=${checkout}`;
  } else {
    alert("Please fill all fields!");
  }
}
</script>

</body>
</html>
