<?php 
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Inloggen|Vakjob.sr CMS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="includes/login.inc.php" method="POST">
      <h1> VAKJOB.SR|CMS</h1>

      <label for="inputGberuikersnaam" class="sr-only">Gebruikers naam</label>
      <input type="text" id="inputGebruikersnaam" name="gebruikersnaam" class="form-control" placeholder="gebruikersnaam" required autofocus>
      <label for="inputWachtwoord" class="sr-only">Wachtwoord</label>
      <input type="password" name="wachtwoord" id="inputWachtwoord" class="form-control" placeholder="Wachtwoord" required>
   
      <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Inloggen</button>
          </form>
  </body>
</html>
