<?php
$servername = "localhost";
$database = "xage3";
$username = "dejan";
$password = "BX2jTRi94u!A";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM subscribers";

$result = $conn->query($sql);
$results = array();
while($row = $result->fetch_assoc())
{
   $results[] = array(
      'ID' => $row['ID'],
      'email' => $row['email'],
      'date' => $row['date']
   );
}
$json = json_encode($results);
echo $json;

mysqli_close($conn);
?>