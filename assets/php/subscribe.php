 <?php
$EmailId = $_POST["SubscribedEmail"];

  // Function to clean the recieved data
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$email = test_input($EmailId);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // redirect
    header("Location:http://localhost/umangmahilat/subscription_error.html");
  }
  else{


    //Database Connect
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

$sql = "INSERT INTO `subscribed` (`Uid`, `Email_id`) VALUES (NULL, '$EmailId')";

if ($conn->query($sql) === TRUE) {
        $headers = "From: order@umangmahilatailors.org" . "\r\n" .
      "CC: sarathvalia@gmail.com";
     // the message
       $msg = "Email ID: " . $EmailId;

     // send email
    mail("mail@umangmahilatailors.org","Subscribed Users",$msg,$headers);

      // redirect
	header("Location:http://www.umangmahilatailors.org/subscribed.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 