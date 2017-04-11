<?php

$servername = "localhost";
$username = "nuck.co";
$password = "qKA2PrtHf5LbYFym";
$dbname = "nuck.co";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$tile_url = $_POST["tile_url"];
$tile_img_url = $_POST["tile_img_url"];
echo $tile_url;
echo $tile_img_url;

// Attempt insert query execution
$sql = "INSERT INTO tiles (tile_url, tile_img_url) VALUES ('$tile_url','$tile_img_url')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>