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
 
echo "Connected successfully";
$email= $_POST['email'];
 
$sql = "INSERT INTO subscribers ( email, date) VALUES ('$email', NOW())";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>