<?php
$checkin  = $_POST['checkin'] ?? '';
$checkout = $_POST['checkout'] ?? '';
$guests   = $_POST['guests'] ?? '';
$roomtype = $_POST['roomtype'] ?? '';

if (!$checkin || !$checkout || strtotime($checkout) <= strtotime($checkin)) {
    die("
    <link rel='stylesheet' href='style.css'>
    <div style='padding:40px;text-align:center;'>
        <h2>Invalid Dates Selected</h2>
        <a href='index.php' class='btn'>Go Back</a>
    </div>");
}

echo "
<link rel='stylesheet' href='style.css'>
<div style='padding:40px;text-align:center;'>
    <h1>Booking Successful</h1>
    <p><strong>Check-in:</strong> $checkin</p>
    <p><strong>Check-out:</strong> $checkout</p>
    <p><strong>Guests:</strong> $guests</p>
    <p><strong>Room Type:</strong> $roomtype</p>

    <br>
    <a href='index.php' class='btn'>Return Home</a>
</div>
";
?>
