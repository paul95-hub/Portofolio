<?php
session_start();
$title = $_POST["title"];
$content = $_POST["cont"];
date_default_timezone_set('Europe/London');
$time=date("h:i:sa");

$date=date("Y/m/d");
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
 $sql = "INSERT INTO BLOGC1 (title, content, date1, time1)
 VALUES ('$title', '$content','$date','$time')";
 if ($conn->query($sql) === TRUE) {


 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }



 if (isset($_POST['submitform']))
     {
     ?>
 <script type="text/javascript">
 window.location = "viewBlog.php";
 </script>
     <?php
     }

?>
