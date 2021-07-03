<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Collection • View All</title>
<link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header">
    <div class="content-wrap">
    <h1>Movie Collection</h1>
        <!-- ***********************  NAV MENU  *********************** -->
<?php
include 'nav.php'
?>
<!-- Add alphabetical nav menu to click on a letter and go to that section. -->
</div>
</section>

        <!-- ***********************  CATALOG CONTENT  *********************** -->
        <section class="catalog">
        <div class="content-wrap">

<?php 

include 'includes/db.php';

$title = $_GET['Title'];
$query = "SELECT * FROM movies WHERE Title='$title'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a movie with title of $title cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $Title = $result_ar['Title'];
    $Year = $result_ar['Year'];
	$Genre = $result_ar['Genre'];
    $Actor1 = $result_ar['Actor1'];
    $Actor2 = $result_ar['Actor2'];
    $Actor3 = $result_ar['Actor3'];
    $Rating = $result_ar['Rating'];
    $Type = $result_ar['Type']; 
    $Summary = $result_ar['Summary'];
}
echo "<p>Title: $Title </p>";
echo "<p>Year: $Year </p>";
echo "<p>Genre: $Genre </p>";
echo "<p>Lead Actor: $Actor1 </p>";
echo "<p>Supporting Actor: $Actor2 </p>";
echo "<p>Supporting Actor: $Actor3 </p>";
echo "<p>Rating: $Rating </p>";
echo "<p>Type: $Type </p>";
echo "<p>Summary: $Summary </p>";

echo "<a href='formEdit.php?Title=" . $Title . "'>Edit This Movie</a>" . "</br>";


if(isset($_SESSION['MyUserName'])){
    if($_SESSION['role']=="Admin")
{

echo "<p><a href='delete-movie.php?Title=" . $Title . "'>Delete This Movie?</a></p>";
}
}


$mysqli->close();
   
?>
</section>
</div>
<!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>

</body>
</main>
</html>
