<?php
// booking.php - booking form and simple backend that saves to bookings.csv

// Basic server-side handling
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitize and validate
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $checkin = trim($_POST['checkin'] ?? '');
    $checkout = trim($_POST['checkout'] ?? '');
    $guests = intval($_POST['guests'] ?? 1);
    $roomtype = trim($_POST['roomtype'] ?? 'Standard');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = "Please provide your name.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please provide a valid email.";
    if ($phone === '') $errors[] = "Please provide a phone number.";
    if ($checkin === '' || $checkout === '') $errors[] = "Select check-in and check-out dates.";
    if (strtotime($checkin) > strtotime($checkout)) $errors[] = "Check-out must be after check-in.";

    if (empty($errors)) {
        // prepare CSV row
        $row = [
            date('Y-m-d H:i:s'),
            $name,
            $email,
            $phone,
            $checkin,
            $checkout,
            $guests,
            $roomtype,
            str_replace(["\r","\n"], [' ', ' '], $message)
        ];
        $csvPath = __DIR__ . '/bookings.csv';
        $fp = fopen($csvPath, 'a');
        if ($fp) {
            fputcsv($fp, $row);
            fclose($fp);
            $success = true;
            // Clear POST to avoid resubmission display
            $_POST = [];
        } else {
            $errors[] = "Unable to save booking — server permission error.";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Book a room - Rayyan's Luxury Stay</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="style.css" rel="stylesheet">
</head>
<body class="page-booking">

<header class="site-header">
  <div class="container header-inner">
    <div class="brand"><a href="index.php"><h1>Rayyan's Luxury Stay</h1></a></div>
    <nav class="nav"><a href="index.php">Home</a> <a href="contact.php">Contact</a></nav>
  </div>
</header>

<main class="container">
  <section class="section">
    <h2>Book a Room</h2>

    <?php if ($success): ?>
      <div class="notice success" data-aos="zoom-in">
        Thank you! Your booking request has been received. We'll contact you soon.
      </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
      <div class="notice error" data-aos="shake">
        <ul><?php foreach ($errors as $e) echo "<li>" . htmlspecialchars($e) . "</li>"; ?></ul>
      </div>
    <?php endif; ?>

    <form method="post" class="booking-form" action="booking.php" data-aos="fade-up">
      <div class="form-grid">
        <label>
          Full name
          <input required name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
        </label>
        <label>
          Email
          <input required type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        </label>
        <label>
          Phone
          <input required name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
        </label>
        <label>
          Check-in
          <input required type="date" name="checkin" value="<?php echo htmlspecialchars($_POST['checkin'] ?? ''); ?>">
        </label>
        <label>
          Check-out
          <input required type="date" name="checkout" value="<?php echo htmlspecialchars($_POST['checkout'] ?? ''); ?>">
        </label>
        <label>
          Guests
          <select name="guests">
            <?php for($i=1;$i<=6;$i++): ?>
              <option <?php if (($_POST['guests'] ?? '') == $i) echo 'selected'; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
          </select>
        </label>

        <label>
          Room type
          <select name="roomtype">
            <option <?php if(($_POST['roomtype'] ?? '')=='Standard') echo 'selected'; ?>>Standard</option>
            <option <?php if(($_POST['roomtype'] ?? '')=='Deluxe') echo 'selected'; ?>>Deluxe</option>
            <option <?php if(($_POST['roomtype'] ?? '')=='Suite') echo 'selected'; ?>>Suite</option>
          </select>
        </label>
      </div>

      <label>
        Message / Requests
        <textarea name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
      </label>

      <div class="form-actions">
        <button type="submit" class="btn">Send booking request</button>
        <a href="index.php" class="btn ghost">Back to Home</a>
      </div>
    </form>
  </section>

  <section class="section small">
    <h3>Info</h3>
    <p>Bookings are confirmed by our reservations team. We may contact you for additional details.</p>
  </section>

</main>

<footer class="site-footer">
  <div class="container footer-inner">
    <div>© <?php echo date('Y'); ?> Rayyan's Luxury Stay</div>
  </div>
</footer>

<script src="scripts.js" defer></script>
</body>
</html>
