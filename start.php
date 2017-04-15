<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "baypredict";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM monterey2015";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["time"]. " - Name: " . $row["sea_water_pressure"]. " " . $row["sea_water_temperature"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>