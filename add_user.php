<?php
// Set database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$verification_code = bin2hex(random_bytes(16));

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO users (name, email, mobile,verfication_code) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $mobile, $verification_code);

$to = $email;
    $subject = "Verify Your Email - Dummy User Management System";
    $message = "Hello $name,\n\nPlease click on the following link to verify your email:\n\nhttp://localhost/verify.php?email=$email&code=$verification_code";
    $headers = "From: admin@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Verification code sent to " . $email;
    } else {
        echo "Error sending verification code";
    }

// Execute SQL statement
if ($stmt->execute() === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();
?>
