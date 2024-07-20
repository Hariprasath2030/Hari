<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

// Check connection
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Error in connecting: " . mysqli_connect_error());
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$website = htmlspecialchars($_POST['website']);
$message = htmlspecialchars($_POST['message']);

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "officialhari2030@gmail.com"; // Enter the email address where you want to receive all messages
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
        $sender = "From: $email";

        if (mail($receiver, $subject, $body, $sender)) {
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send your message!";
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo "Email and message fields are required!";
}

// Close the connection
mysqli_close($con);
?>