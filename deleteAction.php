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

<?php

include 'includes/db.php';

$Title = $_GET['Title'];
$query = "DELETE FROM movies WHERE Title='$Title'";
echo "$query <BR>";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   Echo "The movie $Title has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $Title cannot be found " . mysql_error()."<br>";
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
