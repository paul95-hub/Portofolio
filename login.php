<?php


$email = $_POST["email"];
$pass2 = $_POST["password"];
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




if(isset($email, $pass2))
    {



        $result1 = mysqli_query($conn,"SELECT email1, pass1 FROM USERSLOG WHERE email1 = '".$email."' AND  pass1 = '".$pass2."'");
        $row=mysqli_num_rows($result1);
        if($row > 0 )
        {

          session_start();

             $_SESSION["loggedin"] = "true";
             echo $_SESSION["loggedin"];
            ?>
        <script type="text/javascript">
        window.location = "addPost.html";
        ini_set( 'session.cookie_secure', 1 );
        </script>
            <?php
        }
        else
        {
            echo 'The username or password are incorrect!';

            ?>
            <button onclick="myFunction()">Home Page</button>

            <script>
            function myFunction() {
            window.location = "index.php";
            }
            </script>
            <?php
        }
}


//
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//  $sql = "INSERT INTO USERSLOG (email1, pass1)
//  VALUES ('$email', '$pass1')";
//  if ($conn->query($sql) === TRUE) {
//
// echo"yes";
//  } else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//  }
//  $conn->close();
//  }

?>
