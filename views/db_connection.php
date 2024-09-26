<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "makueni_family";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO events (event_name, event_date, event_Location, gender, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $event_name, $date, $email, $gender, $address);

// Set parameters and execute
$event_name = $_POST['event_name'];
$date = $_POST['date'];
$email = $_POST['Location'];

//$stmt->execute();


?>
