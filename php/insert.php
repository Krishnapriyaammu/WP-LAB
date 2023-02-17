<?php
// Database credentials
$host = "localhost";
$user = "root";
$pass = "";
$db = "mca";
// Connect to MySQL
$conn = mysqli_connect($host, $user, $pass, $db);
// Check for connection errors
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Get form data
 $name = $_POST["Id"];
 $email = $_POST["Name"];
 $password = $_POST["Password"];
 // Insert data into database
 $sql = "INSERT INTO program (Id, Name, Password) VALUES 
('$id', '$name', '$password')";
 if (mysqli_query($conn, $sql)) {
 echo "Registration successful!";
 } else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
// Close database connection
mysqli_close($conn);
?>