<?php
$email = $_POST["email"];
$pass1 = $_POST["password"];
// $servername = "dbprojects.eecs.qmul.ac.uk";
$user = "root";
$pass = "";
$db= "pct30";
// Creates connection
//
// $db=new mysqli('localhost',$user, $pass, $db) or die("Unable to connect");
//
// echo "Works";

$conn = new mysqli('localhost',$user, $pass, $db);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " .$conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $sql = "INSERT INTO USERSLOG (email1, pass1)
 VALUES ('$email', '$pass1')";
 if ($conn->query($sql) === TRUE) {


 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }

?>


<script type="text/javascript">
window.location = "index.php";

</script>
