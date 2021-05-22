<!-- This file creates database, add table, and ultimately adds a new user in the table. -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wocdata";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE wocdata";

# Debug Message
if ($conn->query($sql) === TRUE) {
  // echo "Database created successfully";
} else {
  // echo "Error creating database: " . $conn->error;
}

$conn->close();

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

//default values of variable value
$value="Error";


if($data= $result->fetch_assoc())
{
  // echo "Username taken!";
  $value="Username taken!";
  $flag = 0;
}

else
{
  // Inserting data in table
$sql = "INSERT INTO logintable (uname, username, email, pass)
VALUES ('$name', '$usern', '$email', '$password')";

# Debug Message
if ($conn->query($sql) === TRUE) {
  // echo "You are successfully registered";
  $value= "You are successfully registered";
  $flag = 1;
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page</title>
</head>
<body>
  <?php

    echo "<script>alert('$value')</script>";
    echo "<script>if($flag==1){ location.replace('login.html') }</script>";
    echo "<script>if($flag==0){ location.replace('sign_up.html') }</script>";
  ?>
</body>
</html>
