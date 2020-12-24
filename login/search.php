<?php

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT registerID, FirstName, LastName, Email, Password FROM register";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["registerID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " " . $row["Email"]. " " . $row["Password"]. "<br>";
  }
} else {
  echo "0 results";
}

?>