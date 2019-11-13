<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head lang="en">
<link rel="stylesheet" href="landing.css" type="text/css"/>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Paul Tinca</title>

<link rel="stylesheet" href="reset.css" type="text/css"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="style.css" type="text/css"/>
  </head>
  <body>


<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Paul Tinca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">About Myself <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Experience</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Skills and Achievements</a>


      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portofolio</a>
      </li>

        <li class="nav-item">
        <?php
$check=false;
        if($_SESSION['loggedin'] == "true")
        {
          $check=true;
          ?>

          <button onclick="myFunction()">Log out</button>

      <script>


      function myFunction() {
          window.location = "logout.php";
      }
      </script>
      <li class="nav-item">
        <a >Welcome User</a>
      </li>
          <?php
        }
        else
        {
          $check=false;
        ?>
        <button onclick="myFunction2()">Log in</button>

    <script>

    function myFunction2() {
        window.location = "login.html";
    }
    </script>

    <button onclick="myFunction3()">Create Account</button>

<script>
function myFunction3() {
    window.location = "createlogin.html";
}
</script>

        <?php
}
        ?>
        </li>

      </ul>

    </div>
  </nav>
</header>


  <div class="container-1">
    <div class="col-sm-2 ">
      <div class=" bg-secondary">
    <div class=" bg-info">   <h3>Research Interests</h3></div>
      <p>Machine Learning</p>
      <p>Artificial Intelligence</p>
</div>
      <nav>

<div class=" bg-secondary">
    <div class=" bg-info">  <h3>Skills and Achievements</h3></div>
      <ul class="list-unstyled">
      <li >

  <div >
<i class='fab fa-html5' style='font-size:36px'></i>
HTML - Hyper Text Markup Language
</div>
</li>
<br>
<li>

<div >
<i class='fab fa-css3-alt' style='font-size:36px'></i>  CSS - Cascading Style Sheets
</div>
</li>
<br>
<li >
<div >
<i class='fab fa-js' style='font-size:36px'></i>
  Javascript
</div>
</li>
</ul>
</div>

      </nav>
    </div>
    <div class="col-sm-7">
<div class="container-2">
  <div class="col-sm-8">
    <article>
      <section>
<h3>About Myself</h3>
<p id="name">My name is Paul Tinca and I am a student within the School of Electronic Engineering and Computer Science at Queen Mary University of London</p>
</div>
<div class="col-sm-4">
<figure>
<img src="paultinca.jpg" width="200"/>
</figure>
</div>
</div>
</section>
<section>
<div id="table-responsive">
 <h2> Education and Qualification</h2>
 <table class="table" style="color:white">
   <tr>
           <td>2018-2022</td>
           <td>BSc Computer Science- Queen Mary University of London</td>
</tr><tr>
           <td>2010-2014</td>
           <td>Computer Science with Mathematics High School</td>
</tr>

</table>
</div>
</section>
</article>
</div>



<div class="col-sm-3">
<aside>
<div class=" bg-secondary">
  <div class=" bg-info"><h2>Experience</h2></div>
<p>2016-2019 Retail Assistant</p>


</div>
<div class=" bg-secondary">
  <div class=" bg-info"><h2>Portofolio</h2></div>
<?php
if ($check==true){
?>
<a href="addPost.html">Blog</a>
<?php
}
else{
?>
<a href="login.html">Blog</a>
<?php
}
 ?>
<p>Projects
        <img src="..." class="img-fluid" alt="Responsive image">
    </p>
<br>


</div>

</aside>
</div>
</div>
<div class="container-1">
    <h3>Projects</h3>
    <img src="..." class="img-fluid" alt="Responsive image">
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
