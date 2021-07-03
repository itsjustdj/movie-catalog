<?php

//This is the session code linked to from the form in login.html

include 'includes/db.php';

    //select the database to work with

    $mysqli->select_db("movies_books");
    // Echo("Selected the movie database...<BR><BR>");

//get the username and password from the login form
$myusername=$_POST['myusername'];
$verysecret=$_POST['verysecret'];
//encrypt password
$encrypted_verysecret=md5($verysecret);
$query="SELECT * FROM users WHERE username='$myusername' and password='$encrypted_verysecret'";
$result=$mysqli->query($query);

// To protect against SQL injection (see updated PHP syntax https://www.php.net/manual/en/mysqli.real-escape-string.php)
$myusername = stripslashes($myusername);
$verysecret = stripslashes($verysecret);
$myusername = mysqli_real_escape_string($mysqli, $myusername);
$verysecret = mysqli_real_escape_string($mysqli, $verysecret);

//Below code is old, from before MD5 encrytion!
// $query ="SELECT * FROM users WHERE username='$myusername' and password='$verysecret'";
// $result = $mysqli->query($query);

$count=mysqli_num_rows($result);
// If result matched $myusername and $verysecret, the count of table rows should equal 1

if($count==1){

// Register session variables and redirect the user to "login_success.php" page
session_start();
$_SESSION['MyUserName']= $myusername;
while ($result_ar = mysqli_fetch_assoc($result)) {
$_SESSION["role"]= $result_ar['role'];
}
header("location: login_success.php");
}
else {
echo "<p>That is the wrong username or password.</p>";
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movies and Books • Wrong Login</title>
<link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header-nonav">
    <div class="content-wrap">
    <h1>Movies and Books Collection</h1>
</section>
</div>
<!-- ***********************  MAIN CONTENT AREA  *********************** -->
<section class="main-content">
<div class="content-wrap">
<p>You feelin' lucky, punk?<a href="login.php"> Try again.</a></p>
<img src="includes/images/dirty-harry.jpg" alt="Dirty Harry" style="width:500px">
</section>
</div>
<!-- ***********************  FOOTER  *********************** -->
<!-- <div class="footer"> -->
<?php
include 'includes/footer.php';
?>
</div>
</body>
</main>
</html>
