<?php
// Connect to the database
$host = "localhost"; // database host
$user = "root"; // database username
$pass = ""; // database password
$db= "mca"; // database name
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from a table
$sql = "SELECT * FROM program";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // Display data in a table
 echo "<table class='table'>";
 echo 
"<thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead>";
 echo "<tbody>";
 while ($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo "<td>" . $row["Id"] . "</td>";
 echo "<td>" . $row["Name"] . "</td>";
 echo "<td>" . $row["Password"] . "</td>";
 echo "</tr>";
 }
 echo "</tbody>";
 echo "</table>";
} else {
 echo "No data found.";
}
// Close the connection
$conn->close();
?>
<style>
.table {
 font-family: Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
}
.table td, .table th {
 border: 1px solid #ddd;
 padding: 8px;
}
.table tr:nth-child(even) {
 background-color: #f2f2f2;
}
.table tr:hover {
 background-color: #ddd;
}
.table th {
 padding-top: 12px;
 padding-bottom: 12px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
}
</style>