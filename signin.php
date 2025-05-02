<?php 

require 'config/database.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Se connecter</title>
 
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<section class="form__section">
  <div class="container form__section-container">
    <h2>Se connecter</h2>
    <?php
    if(isset($_SESSION['signin-success'])) : ?>

 
<div class="alert__message success">
  <p><?= $_SESSION['signin-success'];
 unset($_SESSION['signin-success']);
  ?></p>
</div>
<?php elseif(isset($_SESSION['signin'])) : ?>
<div class="alert__message error">
  <p><?= $_SESSION['signin'];
 unset($_SESSION['signin']);
  ?></p>
</div>
<?php endif ?>
    <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
   
     
      <input type="text" value="<?=$username_email?>" name="username_email" placeholder="Pseudo or Email">
     
      <input type="password" value="<?=$password?>" name="password" placeholder="Mot de passe">
     
      
      <button type="submit"  name="btn">S'inscrire</button>
      <small>Tu n'as pas de compte ? <a href="signup.php"> Creer un compte</a></small>
    </form>
  </div>
</section>

</body>
</html>