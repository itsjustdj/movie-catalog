<?php
session_start();
session_destroy();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Collection • User Logout</title>
<link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header-nonav">
    <div class="content-wrap">
    <h1>Movie Collection</h1>
</section>
</div>
<!-- ***********************  MAIN CONTENT AREA  *********************** -->
<section class="catalog">
        <div class="content-wrap">

<p>You are logged out. B'bye now. Goodbye. G'bye now. G'bye. Mmmbye.</p>
<p>"Vizzini said to go back to the beginning."</p>
<p><a href="index.php">This is the beginning.</a></p>
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