$servername = "";
$username = "";
$password = "";
$dbname = "";
$email = $_POST['emailTxt'];

// Create connection
$conn = new mysqli($servername,
$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: "
. $conn->connect_error);
}

$sqlquery = "INSERT INTO `xage3`(`email`, `date`) VALUES ('dejan.sheki.lukic@gmail.com', NOW())"

if ($conn->query($sql) === TRUE) {
echo "record inserted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}