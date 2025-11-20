<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (!$name || !$email || !$message) {
    die("
    <link rel='stylesheet' href='style.css'>
    <div style='padding:40px;text-align:center;'>
        <h2>All fields are required.</h2>
        <a href='index.php' class='btn'>Go Back</a>
    </div>");
}

echo "
<link rel='stylesheet' href='style.css'>
<div style='padding:40px;text-align:center;'>
    <h1>Message Sent</h1>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong> $message</p>

    <br>
    <p>We will contact you soon.</p>
    <a href='index.php' class='btn'>Return Home</a>
</div>
";
?>
