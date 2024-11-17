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

$FirstName = $_POST['firstName'];
$LastName = $_POST['lastName'];
$Pass = $_POST['password'];
$Email = $_POST['EMail'];
$BirthDate = $_POST['Date'];

$sql = "Select * FROM userdata WHERE email = '$Email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>" . "This email already exists .";

} else {
    $sql = "insert INTO userdata (firstName	,secondName,password,email, birthDate) VALUES ('$FirstName', '$LastName','$Pass','$Email','$BirthDate')";
    if ($conn->query($sql) === TRUE) {
        echo "<br>" . "Account has been successfully registered :)";
    } else {
        echo "Error add record: " . $conn->error;
    }
}

$conn->close();

?>