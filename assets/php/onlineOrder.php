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
$EmailId = $_POST["OrderEmail"];
$Number1 = $_POST["Contact1"];
$Number2 = $_POST["Contact2"];
$Address = $_POST["OrderAddress"];

$sql = "INSERT INTO `online_order` (`Uid`, `Name`, `Email`, `Number1`, `Number2`, `Address`) VALUES (NULL, '$Name', '$EmailId', '$Number1', '$Number2', '$Address')";

if ($conn->query($sql) === TRUE) {
	$headers = "From: mail@umangmahilatailors.org" . "\r\n" .
        "CC: sarathvalia@gmail.com";
        // the message
        $msg = nl2br("Name: " . $Name ."\n Email ID: " . $EmailId . "\n Primary Number: " . $Number1 . "\n Seconadry Number: " . $Number2 . "\n Address: " . $Address);

        // send email
        mail("order@umangmahilatailors.org","Email Order",$msg,$headers);

        // redirect
        header("Location:http://www.umangmahilatailors.org/order_placed.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 