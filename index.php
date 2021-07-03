<?php
    session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Collection • Welcome</title>
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

<?php
if(isset($_SESSION['MyUserName'])){
    echo "Welcome, " .$_SESSION['MyUserName'];
    echo ". Your role is " .$_SESSION['role'];
}
else
{
echo "Howdy, stranger! You need to be logged in to use this thing.";
}
?>


<?php
//Admin role
if(isset($_SESSION['MyUserName'])){
    if($_SESSION['role']=="Admin")
{
echo "<p><a href='catalog.php'>View the Catalog</a></p>";
}
}

//Editor role
if(isset($_SESSION['MyUserName'])){
    if($_SESSION['role']=="Admin")
{
echo "<p><a href='catalog.php'>View the Catalog</a></p>";
}
}
?>

<p><a href="login.php">User Login</a></p>

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