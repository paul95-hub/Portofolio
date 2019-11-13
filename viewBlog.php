<html>
<head>
<link rel="stylesheet" href="viewBlog.css" type="text/css"/>
</head>
<body>
<?php
session_start();
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
?>
<legend>
<button onclick="myFunction()">Home Page</button>

<script>
function myFunction() {
window.location = "index.php";
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
  ?>
  window.location = "login.html";

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
