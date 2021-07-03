<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Collection • Search Results </title>
    <link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header">
    <div class="content-wrap">
    <h1>Movie Collection Search</h1>
        <!-- ***********************  NAV MENU  *********************** -->
<?php
include 'nav.php'
?>
<!-- Add alphabetical nav menu to click on a letter and go to that section. -->
</div>
</section>

        <!-- ***********************  RESULTS AREA  *********************** -->
    <section class="search-results">
    <div class="content-wrap">
    <h2>Search Results</h2>
    <p>You searched for:</p>

<?php

//Connect to the database
$servername = "mysql.moviesandbooks.online";
$username = "djbillings";
$password = "XxfZAZE8ntCCfjvpT3xr";
$db = "movies_books";

// $conn = include 'includes/db.php';

$conn = new mysqli ($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

//Capture data in HTML form
$search = $_POST ['search'];

// Create the database query
 $sql = "SELECT * FROM movies WHERE Title LIKE '%$search%' OR Genre LIKE '%$search%' OR Director LIKE '%$search%' OR Year LIKE '%$search%' OR Actor1 LIKE '%$search%' 
 OR Actor2 LIKE '%$search%' OR Actor3 LIKE '%$search%' OR Rating LIKE '%$search%' OR Type LIKE '%$search%'";
//Using %_$search% with the underscore allows searching for any word in the table row. Sometimes. It's weird.

 $result = $conn->query($sql);

 // Print the query to the browser so you can see it
echo ("<p><span class='query-echo'>".$search."</span></p>") ;
?>
<p><em><strong>Well, lookie what we have here...</em></strong></p>
<?php
// Try to search the database
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        echo  $row["Title"] ." <br> ".$row["Genre"]." <br> ".$row["Actor1"].", ".$row["Actor2"].", ".$row["Actor3"]." <br> ".$row["Year"]." </p> <br>" ;
    }
} else {
    echo "There are no records for that search. Sorry!". "</br>";
}

   $conn->close();
?>
<p><em>Do you want to <a href="searchMovies.php">try another one?</a></em></p>
</section>
</div>

<!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>

</body>
</main>
</html>