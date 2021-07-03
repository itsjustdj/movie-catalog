<!DOCTYPE html>
<html>
    <head>
    <title>Movie Collection • Delete Movie</title>
    <link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <section class="header">
        <div class="content-wrap">
            <h1>Delete Movie</h1>

<?php
include 'nav.php'
?>
</section>
</div>

<section class="add-form">
        <div class="content-wrap">

<h3>WARNING! YOU ARE ABOUT TO DELETE THIS MOVIE!</h3>
<p><em>Are you sure you want to delete this movie? </em> Really? It's forever.</p>

Wait! I want to go <a href="index.php">back to the catalog</a> and not mess with stuff.<hr>

<?php 

include 'includes/db.php';

$Title = $_GET['Title'];
$query = "SELECT * FROM movies WHERE Title='$Title'";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a movie with Title of $title cannot be found " . mysql_error()."<br>";
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

echo "<p>Title: $Title </p>";
echo "<p>Year: $Year </p>";
echo "<p>Genre: $Genre </p>";
echo "<p>Lead Actor: $Actor1 </p>";
echo "<p>Supporting Actor: $Actor2 </p>";
echo "<p>Supporting Actor: $Actor3 </p>";
echo "<p>Rating (1-5): $Rating </p>";
echo "<p>Type: $Type </p>";
echo "<p><a href='deleteAction.php?Title=".$result_ar['Title']."'>Yes, delete this movie.</a></p>";
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