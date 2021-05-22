<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// fetch data from login form
$usern=$_POST['username'];
$password=$_POST['password'];

// SQL query for fetching user data
$sql = "SELECT uname FROM logintable WHERE username='$usern' AND pass='$password'";

$result = $conn->query($sql);

if($data= $result->fetch_assoc()) 
{
    echo "Welcome" . $data['uname'] ;
}

else 
{
    echo "wrong credentials";
}


$conn->close();

?>
