<!-- This file creates database, add table, and ultimately adds a new user in the table. -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindata";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE logindata";

# Debug Message
if ($conn->query($sql) === TRUE) {
  // echo "Database created successfully";
} else {
  // echo "Error creating database: " . $conn->error;
}

// Now since our DB is created, building new connection
$conn = new mysqli($servername, $username, $password, $dbname);


// sql to create table
$sql = "CREATE TABLE logintable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    # Debug Message
    if ($conn->query($sql) === TRUE) {
      // echo "Table users created successfully";
    } else {
      // echo "Error creating table: " . $conn->error;
    }

// Variables for storing dynamic data from user
$name=$usern=$email=$password="";

$name=$_POST['name'];
$usern=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

// A formal welcome note
echo "hello " . $name . "<br>";

// Checking if username is taken
$sql = "SELECT * FROM logintable WHERE username='$usern'";
$result = $conn->query($sql);

if($data= $result->fetch_assoc())
{
  echo "Username taken";
}

else
{
  // Inserting data in table
$sql = "INSERT INTO logintable (uname, username, email, pass)
VALUES ('$name', '$usern', '$email', '$password')";

# Debug Message
if ($conn->query($sql) === TRUE) {
  echo "You are successfully registered";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();

?>
