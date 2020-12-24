<?php

include "db_connect.php";
$firstname = $_GET["FirstName"];
$lastname = $_GET["LastName"];
$email = $_GET["Email"];
$password = $_GET["Password"];

echo "<h2>Trying to register you: $firstname, $lastname, $email and $password</h2>";

$sql = "INSERT INTO register (registerID, FirstName, LastName, Email, Password) VALUES (NULL, '$firstname', '$lastname', '$email', '$password')";
$result = $mysqli->query($sql);

?>







