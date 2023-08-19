<!DOCTYPE html>
<html>
<head>
    <title>MySQL Connection and Display</title>
</head>
<body>

<?php
$hostname = 'p3plzcpnl489458.prod.phx3.secureserver.net';
$username = 'drf84picgqsl'; // your MySQL username
$password = 'niriadmin@2023'; // your MySQL password
$database = 'niridb'; // your MySQL database name

// Create a connection
$con = mysqli_connect($hostname,$username,$password,$database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connected successfully<br>";

// Fetch and display data
$query = "SELECT * FROM testdb"; // Replace 'your_table' with your actual table name

$result = $con->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Close the connection
$con->close();
?>

</body>
</html>
