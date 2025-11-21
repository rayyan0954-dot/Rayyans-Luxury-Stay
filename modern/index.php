<?php
// index.php - Modernized Rayyan's Luxury Stay
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Rayyan's Luxury Stay</title>

  <!-- AOS (Animate on Scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- main css -->
  <link rel="stylesheet" href="style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>

<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <a href="index.php"><h1>Rayyan's Luxury Stay</h1></a>
      <p class="tag">Comfort • Elegance • Warmth</p>
    </div>

    <nav class="nav">
      <a href="#rooms">Rooms</a>
      <a href="#lobby">Lobby</a>
      <a href="#pool">Pool</a>
      <a href="#location">Location</a>
      <a href="booking.php" class="btn">Book Now</a>
      <button id="darkToggle" class="icon-btn" aria-label="Toggle dark mode">🌓</button>
    </nav>
  </div>
</header>

<main>
  <!-- HERO -->
  <section class="hero" style="background-image:url('images/hero.jpg')" data-aos="fade-up">
    <div class="container hero-content">
      <h2>Discover a modern stay with classic hospitality</h2>
      <p>Rooms from ₹999/night • Free Wi-Fi • Rooftop pool</p>
      <a href="booking.php" class="btn large">Book your stay</a>
    </div>
  </section>

  <!-- Rooms Gallery + Slider -->
  <section id="rooms" class="container section" data-aos="fade-up">
    <h2 class="section-title">Our Rooms</h2>

    <div class="slider" id="roomSlider" aria-roledescription="carousel">
      <div class="slides">
        <div class="slide"><img src="images/room1.jpg" alt="Room 1"></div>
        <div class="slide"><img src="images/room2.jpg" alt="Room 2"></div>
        <div class="slide"><img src="images/room3.jpg" alt="Room 3"></div>
      </div>

      <button class="slider-btn prev" data-action="prev" aria-label="Previous slide">‹</button>
      <button class="slider-btn next" data-action="next" aria-label="Next slide">›</button>
      <div class="dots" id="sliderDots"></div>
    </div>

    <p class="lead">Spacious rooms with modern amenities and comfort-first design.</p>
  </section>

  <!-- Lobby -->
  <section id="lobby" class="section" data-aos="fade-right">
    <div class="container split">
      <div class="split-left">
        <h2>Lobby</h2>
        <p>Relax in our airy lobby — an inviting space to meet, work, or unwind. Fresh design and warm staff make every arrival pleasant.</p>
        <a href="booking.php" class="btn">Check Availability</a>
      </div>
      <div class="split-right">
        <img src="images/lobby.jpg" alt="Lobby area" class="rounded">
      </div>
    </div>
  </section>

  <!-- Pool -->
  <section id="pool" class="section" data-aos="fade-left">
    <div class="container split reverse">
      <div class="split-left">
        <img src="images/pool.jpg" alt="Pool area" class="rounded">
      </div>
      <div class="split-right">
        <h2>Rooftop Pool</h2>
        <p>Our rooftop pool is perfect for sunrise swims or evening relaxation with city views and ambient lighting.</p>
      </div>
    </div>
  </section>

  <!-- Location / Map -->
  <section id="location" class="section container" data-aos="zoom-in">
    <h2 class="section-title">Where to find us</h2>

    <div class="map-wrap">
      <!-- Interactive Google Maps embed (replace the src with your place or coordinates) -->
      <iframe
        src="https://www.google.com/maps?q=Chennai&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Hotel location"
        ></iframe>

      <!-- fallback / decorative image -->
      <img src="images/map.jpg" alt="Map view (decorative)" class="map-decor">
    </div>
  </section>

  <!-- Small amenities / features -->
  <section class="section container" data-aos="fade-up">
    <h2 class="section-title">Amenities</h2>
    <ul class="amenities-grid">
      <li>Free Wi-Fi</li>
      <li>24/7 Front Desk</li>
      <li>Rooftop Pool</li>
      <li>Complimentary Breakfast</li>
      <li>Room Service</li>
      <li>Airport Transfer (on request)</li>
    </ul>
  </section>

  <!-- Footer CTA -->
  <section class="cta" data-aos="fade-up">
    <div class="container">
      <h3>Ready for a relaxing stay?</h3>
      <a href="booking.php" class="btn large">Reserve a Room</a>
    </div>
  </section>

</main>

<footer class="site-footer">
  <div class="container footer-inner">
    <div>
      <strong>Rayyan's Luxury Stay</strong><br>
      123 Sample Street, Your City
    </div>
    <div>
      <a href="contact.php">Contact</a> · <a href="booking.php">Bookings</a>
    </div>
    <small>© <?php echo date('Y'); ?> Rayyan's Luxury Stay</small>
  </div>
</footer>

<!-- scripts -->
<script src="scripts.js" defer></script>
<!-- AOS script -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script> AOS.init({ duration: 700, once: true }); </script>
</body>
</html>
