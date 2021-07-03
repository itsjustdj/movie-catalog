<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Collection • Movie Saved</title>
    <link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header">
    <div class="content-wrap">
    <h1>Add Movie Results</h1>
        <!-- ***********************  NAV MENU  *********************** -->
<?php
include 'nav.php'
?>
</div>
</section>

        <!-- ***********************  RESULTS AREA  *********************** -->
    <section class="added-movie">
<?php 
// Capture the values posted to this php program from the text fields

$Title =  trim( $_REQUEST['Title']) ;
$Year = trim( $_REQUEST['Year']) ;
$Genre = trim( $_REQUEST['Genre']) ;
$Director = trim( $_REQUEST['Director']) ;
$Actor1 =  $_REQUEST['Actor1'] ;
$Actor2 =  $_REQUEST['Actor2'] ;
$Actor3 =  $_REQUEST['Actor3'] ;
$Rating =  $_REQUEST['Rating'] ;
$Type =  $_REQUEST['Type'] ;
$Summary =  $_REQUEST['Summary'] ;


//Build a SQL Query using the values from above

$query = "INSERT INTO movies
  (Title, Year, Genre, Director, Actor1, Actor2, Actor3, Rating, Type, Summary)
   VALUES (
   '$Title', 
   '$Year',
   '$Genre',
   '$Director',
    '$Actor1',
    '$Actor2',
    '$Actor3',
    '$Rating',
    '$Type',
    '$Summary'
    )";

// Print the query to the browser so you can see it
echo ("<span class='query-echo'>" . $query. "</span>" . "<br>");

include 'includes/db.php';

echo ("<span class='query-echo'>" . 'Connected successfully to database.' . "</span>" . "<br>"); 
  
//select a database to work with
$mysqli->select_db("movie_catalog");
echo ("<span class='query-echo'>" . 'Selected the movie catalog database.' . "</span>" . "<br>" . "<hr>"); 

/* Try to insert the new movie into the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully entered $Title into the database.</P>";
}
else
{
    echo "Error entering $Title into database: " . $mysqli->error."<br>";
}
$mysqli->close();
?>
</section>

<!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>

</body>
</main>
</html>