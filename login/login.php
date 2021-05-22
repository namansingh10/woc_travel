<!-- This file checks the credentials of the user who is trying to log in  -->

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
    // echo "Welcome " . $data['uname'] ;
    $value= "Welcome " . $data['uname'];
}

else 
{
    echo "wrong credentials";
    $value= "Wrong Credentials";
}


$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test page</title>
</head>
<body>

  <?php
    echo "<h1>$value</h1>"
  ?>

</body>
</html>
