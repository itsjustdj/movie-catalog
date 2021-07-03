<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Collection • Movie Edited</title>
<link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header">
    <div class="content-wrap">
    <h1>Movie Edited</h1>
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
// Capture the values posted to this php program from the text fields in the form

$ID =  trim( $_REQUEST['ID']) ;
$Title =  trim( $_REQUEST['Title']) ;
$Year = trim( $_REQUEST['Year']) ;
$Genre = trim( $_REQUEST['Genre']) ;
$Director = trim( $_REQUEST['Director']) ;
$Actor1 =  $_REQUEST['Actor1'] ;
$Actor2 =  $_REQUEST['Actor2'] ;
$Actor3 =  $_REQUEST['Actor3'] ;
$Rating =  $_REQUEST['Rating'] ;
$Type =  $_REQUEST['Type'] ;
$Summary = $_REQUEST['Summary'] ;

//Build a SQL Query using the values from above

$query = "UPDATE movies SET 

ID='$ID',
Title='$Title', 
Year='$Year', 
Genre='$Genre', 
Director='$Director',
Actor1='$Actor1',
Actor2='$Actor2',
Actor3='$Actor3',
Rating='$Rating',
Type='$Type',
Summary='$Summary'

WHERE

ID='$ID';

-- Title='$Title'"; 

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'includes/db.php';

  echo 'Connected successfully to mySQL. <BR>'; 
  
//select a database to work with
$mysqli->select_db("movie_catalog");
   echo ("Selected the Movie Catalog database. <br>");

/* Try to edit the movie in the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully edited $Title in the database.</P>";
}
else
{
    echo "Error editing $Title in the database: " . $mysqli->error."<br>";
}
echo "<a href='viewmovie.php?Title=" . $Title . "'>See your handiwork!</a>";
$mysqli->close();
?><br>

</section>
</div>
<!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>
</div>
</body>
</main>
</html>

