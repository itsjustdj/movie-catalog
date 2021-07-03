<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Collection • Search Movies</title>
    <link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <section class="header">
        <div class="content-wrap">
            <h1>Movie Collection Search</h1>

                  <!-- ***********************  NAV MENU  *********************** -->
<?php
include 'nav.php'
?>
</section>
</div>

                  <!-- ***********************  SEARCH AREA  *********************** -->
<section class="search">
    <div class="content-wrap"> 
    <h1>Search Movies</h1>
    <p>In the box below you can search for movies by title, actor, genre, year, rating, or type. Soon I will add more search options!</p>

<form action="searchAction.php" method="post">
    Search <input type="text" name="search" placeholder="Title, Actor, Genre, Year, Rating, or Type"><br>
    <input type="submit" value="Find it!">
</form><br>
</section>
</div>

 <!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>

</body>
</main>
</html>