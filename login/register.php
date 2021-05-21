<?php

echo "hello " . $_POST["name"] . "<br>";
echo "You are succesfully registered";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')"

?>