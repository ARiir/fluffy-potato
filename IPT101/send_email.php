<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$partySize = $_POST['partySize'];
$specialRequests = $_POST['specialRequests'];

// Compose email message
$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Date: $date\n";
$message .= "Time: $time\n";
$message .= "Party Size: $partySize\n";
$message .= "Special Requests: $specialRequests\n";

// Set recipient email address
$to = "ariesbanzuella@gmail.com"; // Change this to your email address

// Set email subject
$subject = "New Reservation";

// Send email
mail($to, $subject, $message);

// Redirect back to the form page after sending email
header("Location: reservation_form.html");
exit();
?>
