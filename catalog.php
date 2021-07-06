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
    <h1>Movie Collection</h1>
        <!-- ***********************  NAV MENU  *********************** -->
<?php
include 'nav.php';
?>
<!-- Add alphabetical nav menu to click on a letter and go to that section. -->
</div>
</section>

        <!-- ***********************  CATALOG CONTENT  *********************** -->
        <section class="catalog">
        <div class="content-wraplong">
<?php

include 'includes/db.php';

$query = "SELECT * FROM movies ORDER BY Title";
/* Try to find the movies in the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Error getting movies from the database: " . mysql_error()."<br>";
}

//***
echo "<table id='Grid' style='width: 90vw margin-left: auto; margin-right: auto;'><tr>";
echo "<th style='width: 300px'>Title</th>";
echo "<th style='width: 50px'>Year</th>";
echo "<th style='width: 200px'>Genre</th>";
echo "<th style='width: 200px'>Director</th>";
echo "<th style='width: 200px'>Lead Actor</th>";
echo "<th style='width: 200px'>Supporting Actor</th>";
echo "<th style='width: 200px'>Supporting Actor</th>";
echo "<th style='width: 50px'>Rating</th>";
echo "<th style='width: 50px'>Type</th>";
echo "</tr>\n";

$class ="odd"; // Keep track of whether a row was even or odd so we can style it later.

while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    echo "<td><a href='viewmovie.php?Title=".$result_ar['Title']."'>" . $result_ar['Title'] . "</td>";
    // echo "<td>" . $result_ar['Title'] . "</td>";
    echo "<td>" . $result_ar['Year'] . "</td>";
    echo "<td>" . $result_ar['Genre'] . "</td>";
    echo "<td>" . $result_ar['Director'] . "</td>";
    echo "<td>" . $result_ar['Actor1'] . "</td>";
    echo "<td>" . $result_ar['Actor2'] . "</td>";
    echo "<td>" . $result_ar['Actor3'] . "</td>";
    echo "<td>" . $result_ar['Rating'] . "</td>";
    echo "<td>" . $result_ar['Type'] . "</td>";
    echo "<td><a href='formEdit.php?Title=" . $result_ar['Title'] . "'>Edit</a> </td>";
   echo "</td></tr>\n";
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "</table>";
$mysqli->close($conn);
?>
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