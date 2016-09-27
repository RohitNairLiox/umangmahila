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
$EmailId = $_POST["SubscribedEmail"];

$sql = "INSERT INTO `subscribed` (`Uid`, `Email_id`) VALUES (NULL, '$EmailId')";

if ($conn->query($sql) === TRUE) {
	header("Location:http://www.umangmahilatailors.org/subscribed.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 