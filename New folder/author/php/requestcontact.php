 <?php
$servername = "mysql.hostinger.in";
$username = "u513835708_sara";
$password = "love2play";
$dbname = "u513835708_umang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name = $_POST["name"];
$EmailId = $_POST["email"];
$Message = $_POST["comments"];

$sql = "INSERT INTO `rohit_requestedcontact` (`Uid`, `Name`, `Email`, `Message`) VALUES (NULL, '$Name', '$EmailId', '$Message');";

if ($conn->query($sql) === TRUE) {
	header("Location:http://www.umangmahilatailors.org/author/contact_requested.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 