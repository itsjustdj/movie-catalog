<?php
include_once 'includes/db.php' ;

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Movie Collection • Add Movie</title>
    <link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <section class="header">
        <div class="content-wrap">
            <h1>Add Movie</h1>

<?php
include 'nav.php'
?>
</section>
</div>

        <!-- ***********************  ADD FORM AREA  *********************** -->
        <section class="add-form">
        <div class="content-wraplong">
            <h2>Add a Movie</h2>

<!-- Add Movie Form -->
<form action="addAction.php" method="post">
 <p>Title: <input type="text" name="Title" /></p>
 <p>Year: <input type="int" name="Year" /></p>
 <p>Genre: <input type="text" name="Genre" /></p>
 <p>Actor 1: <input type="text" name="Actor1" /></p>
 <p>Actor 2: <input type="text" name="Actor2" /></p>
 <p>Actor 3: <input type="text" name="Actor3" /></p>
 <p>Rating (1-5): <input type="int" name="Rating"/><br> <em>(1 = worst, 5 = best)</em></p>
 <p>Type: <input type="text" name="Type" /><br><em> (DVD or Drive?)</em></p> 
 <p>Summary: <br><textarea type="text" name="Summary" /></textarea></p> 
 <p><input type="submit" value="Add it!" /><input type="reset"> </p>
</form>

<br>
Never mind, take me back to the future. I mean, <a href="catalog.php">catalog.</a>
<br>
</section>
</div>

<!-- ***********************  FOOTER  *********************** -->

<?php
include 'includes/footer.php';
?>
</body>
</main>
</html>