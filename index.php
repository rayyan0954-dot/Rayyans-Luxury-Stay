<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayyan's Luxury Stay – Luxury Stay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HERO SECTION -->
<h1 class="fade-up">Welcome to Rayyan's Luxury Stay</h1>
<p class="fade-in">Experience luxury, comfort and elegance.</p>

<header class="hero">
    <nav class="navbar">
        <div class="logo">Hotel <span>Empire</span></div>
        <ul class="nav-links">
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#dining">Dining</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="hero-content">
        <h1>Welcome to Rayyan's Luxury Stay</h1>
        <p>Experience luxury, comfort and elegance.</p>
    </div>
</header>

<!-- BOOKING SECTION -->
<form class="booking-form fade-up" ...>

<section class="booking-section">
    <h2>Book Your Stay</h2>

    <form action="booking.php" method="POST" class="booking-form">
        <label>Check-in
            <input type="date" name="checkin" required>
        </label>

        <label>Check-out
            <input type="date" name="checkout" required>
        </label>

        <label>Guests
            <select name="guests">
                <option>1</option><option>2</option>
                <option>3</option><option>4</option>
            </select>
        </label>

        <label>Room Type
            <select name="roomtype">
                <option>Standard</option>
                <option>Deluxe</option>
                <option>Suite</option>
            </select>
        </label>

        <button type="submit" class="btn">Check Rates</button>
    </form>
</section>

<!-- ROOMS -->
<div class="room-box fade-up" style="animation-delay:0.2s">...</div>
<div class="room-box fade-up" style="animation-delay:0.4s">...</div>
<div class="room-box fade-up" style="animation-delay:0.6s">...</div>

<section id="rooms" class="rooms-section">
    <h2>Our Rooms</h2>

    <div class="room-box">
        <img src="images/room1.jpg" alt="">
        <h3>Standard Room</h3>
        <p>Comfortable and affordable with all basic amenities.</p>
    </div>

    <div class="room-box">
        <img src="images/room2.jpg" alt="">
        <h3>Deluxe Room</h3>
        <p>Spacious room with king-size bed and premium features.</p>
    </div>

    <div class="room-box">
        <img src="images/room3.jpg" alt="">
        <h3>Suite</h3>
        <p>Luxurious suite with living area and top-class comfort.</p>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about-section fade-left">

<section id="about" class="about-section">
    <h2>About Us</h2>
    <p>
        Rayyan's Luxury Stay is known for providing luxury accommodation
        with world-class hospitality, top-notch rooms and delicious dining.
    </p>
</section>

<!-- CONTACT -->
<form class="contact-form fade-right" ...>

<section id="contact" class="contact-section">
    <h2>Contact Us</h2>

    <form action="contact.php" method="POST" class="contact-form">
        <label>Name
            <input type="text" name="name" required>
        </label>

        <label>Email
            <input type="email" name="email" required>
        </label>

        <label>Message
            <textarea name="message" rows="5" required></textarea>
        </label>

        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<footer>
    <p>© 2025 Rayyan's Luxury Stay – All Rights Reserved</p>
</footer>

</body>
</html>
