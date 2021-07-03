<?php
$mysqli = new mysqli('localhost:8889', 'root', 'root', 'movies_books' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("movies_books");
?>