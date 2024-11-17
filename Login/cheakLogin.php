<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully" . "<br>";
}

$Pass = $_POST['password'];
$Email = $_POST['EMail'];

$sql = "Select * FROM userdata WHERE email = '$Email' && password = '$Pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>" . "Logged in successfully .";
} else {
    echo "<br>" . "Incorrect email or password";
}

$conn->close();

?>