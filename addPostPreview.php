<html>
<head>
<link rel="stylesheet" href="viewBlog.css" type="text/css"/>
</head>
<body>
<?php

//copy of viewblog

// $servername = "dbprojects.eecs.qmul.ac.uk";


session_start();
$title = $_POST["title2"];
$content = $_POST["cont2"];
date_default_timezone_set('Europe/London');
$time=date("h:i:sa");

$date=date("Y/m/d");
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
?>
<legend>
<button onclick="myFunction()">Back</button>

<script>
function myFunction() {
window.location = "addPostMAIN.php";
}
</script>

<div>

<button onclick="myFunction2()">AddPost</button>

<script>


function myFunction2() {
<?php  if($_SESSION['loggedin'] == "true")
  {
    ?>
window.location = "addPost.html";
  <?php
}
else{

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
}
</script>
</legend>
<?php


$sql = "SELECT title, content, date1, time1 FROM BLOGC1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>"."Title: " . $row["title"]."<br>". "Content: " . $row["content"]. "<br>". $row["date1"]." " . $row["time1"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>
