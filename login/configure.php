<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataentry";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE dataentry";

# Debug Message
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);


// sql to create table
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    # Debug Message
    // if ($conn->query($sql) === TRUE) {
    //   echo "Table MyGuests created successfully";
    // } else {
    //   echo "Error creating table: " . $conn->error;
    // }

echo "hello " . $_POST["name"] . "<br>";
echo "You are succesfully registered";

// $sql = "INSERT INTO users (uname, username, email, pass)
// VALUES ($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"])";

$conn->close();

?>
