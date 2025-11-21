<?php
// contact.php - simple contact info
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact - Rayyan's Luxury Stay</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <div class="brand"><a href="index.php"><h1>Rayyan's Luxury Stay</h1></a></div>
    <nav class="nav"><a href="index.php">Home</a> <a href="booking.php">Book</a></nav>
  </div>
</header>

<main class="container section">
  <h2>Contact Us</h2>
  <div class="contact-grid">
    <div>
      <h3>Address</h3>
      <p>123 Sample Street, Your City, Country</p>

      <h3>Phone</h3>
      <p>+91 98765 43210</p>

      <h3>Email</h3>
      <p>info@example.com</p>
    </div>

    <div>
      <h3>Send a message</h3>
      <form action="contact.php" method="post">
        <label>Name <input name="name"></label>
        <label>Email <input name="email"></label>
        <label>Message <textarea name="message"></textarea></label>
        <div class="form-actions">
          <button class="btn">Send</button>
        </div>
      </form>
    </div>
  </div>
</main>

<footer class="site-footer">
  <div class="container footer-inner">
    <div>© <?php echo date('Y'); ?> Rayyan's Luxury Stay</div>
  </div>
</footer>
</body>
</html>
