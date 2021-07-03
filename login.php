<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Catalog • Login Page</title>
<link href="https://fonts.googleapis.com/css2?family=Cutive&family=Montserrat:ital,wght@0,400;0,700;1,400;1,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <!-- ***********************  HEADER  *********************** -->
    <section class="header-nonav">
    <div class="content-wrap">
    <h1>Movies and Books Login</h1>
</section>
</div>
    

        <!-- ***********************  MAIN CONTENT AREA  *********************** -->
        <section class="catalog">
        <div class="content-wrap">
    
        <form action="post_login.php" method="post">
      <p><strong>Movie Catalog Login Page</strong></p>
      <p>Username: <input name="myusername" type="text" id="myusername"></p>
      <p>Password: <input type="password" name="verysecret" type="text" id="verysecret"></p>
      <p><input type="submit" name="Submit" value="Login"></p>
    </form>

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
        
