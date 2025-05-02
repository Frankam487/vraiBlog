<?php 
session_start();
require "config/constants.php";

$firstname = $_SESSION['signup-data']['firstname'] ?? '';
$lastname = $_SESSION['signup-data']['lastname'] ?? '';
$username = $_SESSION['signup-data']['username'] ?? '';
$email = $_SESSION['signup-data']['email'] ?? '';
$createpasseword = $_SESSION['signup-data']['createpasseword'] ?? '';
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? '';
unset($_SESSION['signup-data']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>s'inscrire</title>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="<?=ROOT_URL?>css/style.css">
</head>
<body>

<section class="form__section">
  <div class="container form__section-container">
    <h2>S'inscrire</h2>
    <div class="alert__message error">
      <?php if(isset($_SESSION['signup'])): ?>
         <div class="alert__message error">
<p>
  <?=
   $_SESSION['signup'];
  unset($_SESSION['signup']);
  ?>
</p>
         </div>
      
    </div>
    <?php endif ?>
    <form action="<?php ROOT_URL ?>signup-logic.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="firstname" value="<?=$firstname?>" placeholder="Prenom">
      <input type="text" value="<?=$lastname?>" name="lastname" placeholder="Nom">
      <input type="text" name="username" value="<?=$username?>" placeholder="pseudo">
      <input type="email" value="<?=$email?>" name="email" placeholder="Email">
      <input type="password" value="<?=$createpasseword?>"name="createpassword" placeholder="Mot de passe">
      <input type="password"  value="<?=$confirmpassword?>"name="confirmpassword" placeholder="Confirm Mot de passe">
      <div class="form__control">
        <label for="avatar">Avatar de L'utilisateur</label>
        <input type="file" name="avatar" id="avatar">
      </div>
      <button type="submit" name="submit" id="btn">S'inscrire</button>
      <small>Deja un compte ? <a href="signin.php"> Se connecter</a></small>
    </form>
  </div>
</section>

</body>
</html>