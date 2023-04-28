<?php
// Database connection
$dbhost = "localhost";
$dbname = "your_database_name";
$dbuser = "your_username";
$dbpass = "your_password";

// Create connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// Retrieve user data from database
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display user data in a table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Verified</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "<td>" . $user['mobile'] . "</td>";
    echo "<td>" . ($user['verified'] ? "Verified" : "Not Verified") . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
