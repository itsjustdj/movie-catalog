<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Collection • Edit Movie</title>
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
        <div class="content-wraplong">
        <h2>Edit Movie</h2>
<?php
include 'includes/db.php';

$Title = $_GET['Title'];
$query = "SELECT * FROM movies WHERE Title='$Title'";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
 // echo "<p>Got the info</p>"; // Don't do anything if successful.
}
else
{
 echo "Sorry, a movie with Title of $Title cannot be found " .  $mysqli->error."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $ID = $result_ar['ID'];
    $Title = $result_ar['Title'];
    $Year = $result_ar['Year'];
	$Genre = $result_ar['Genre'];
    $Director = $result_ar['Director'];
    $Actor1 = $result_ar['Actor1'];
    $Actor2 = $result_ar['Actor2'];
    $Actor3 = $result_ar['Actor3'];
    $Rating = $result_ar['Rating'];
    $Type = $result_ar['Type'];
    $Summary = $result_ar['Summary'];
}
// echo "$ID </p>";
// echo "$Title </p>";
// echo "$Year</p>";
// echo "<p>Genre: $Genre </p>";
// echo "<p>Director: $Director </p>";
// echo "<p>Lead Actor: $Actor1</p>";
// echo "<p>Supporting  Actor: $Actor2</p>";
// echo "<p>Supporting Actor: $Actor3</p>";
// echo "<p>Rating: $Rating</p>";
// echo "<p>Type: $Type</p>";
// echo "<p>Summary: $Summary</p>";

$mysqli->close();
?>
<form action="editAction.php"
method=”post”>

ID: <?php echo "$ID" ?><input name="ID" type="hidden" value= "<?php echo "$ID" ?>" /><br />
<br />
Title: <input name="Title" type="text" value= "<?php echo "$Title" ?>" /><br />
<br />
Year: <input name="Year" type="text" value= "<?php echo "$Year" ?>" /><br />
<br />
Genre: <input name="Genre" type="text" value= "<?php echo "$Genre" ?>" /><br />
<br />
Director: <input name="Director" type="text" value= "<?php echo "$Director" ?>" /><br />
<br />
Lead Actor: <input name="Actor1" type="text" value= "<?php echo "$Actor1" ?>" /><br />
<br />
Supporting Actor: <input name="Actor2" type="text" value= "<?php echo "$Actor2" ?>" /><br />
<br />
Supporting Actor: <input name="Actor3" type="text" value= "<?php echo "$Actor3" ?>" /><br />
<br />
Rating: <input name="Rating" type="int" value= "<?php echo "$Rating" ?>" /><br />
<br />
Type: <input name="Type" type="text" value= "<?php echo "$Type" ?>" /><br />
<br />
Summary: <textarea name="Summary" type="text" value= "<?php echo "$Summary" ?>"  /></textarea><br />
<br />
<input name="Submit1" type="submit" value="submit" /><br />
&nbsp;</form><br>

<?php
echo 'Never mind, it\'s fine. '; echo "<a href='viewmovie.php?Title=" . $Title . "'>Take me back!</a>";

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
