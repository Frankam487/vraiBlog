<?php 

require 'config/database.php';

if (isset($_POST['submit'])) {
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $createpassword = $_POST['createpassword'];
  $confirmpassword = $_POST['confirmpassword'];
  $avatar = $_FILES['avatar'];

 
  if (!$firstname) {
    $_SESSION['signup'] = "Stp entre ton nom";
  } elseif (!$lastname) {
    $_SESSION['signup'] = "Stp entre ton prénom";
  } elseif (!$username) {
    $_SESSION['signup'] = "Stp entre ton nom d'utilisateur";
  } elseif (!$email) {
    $_SESSION['signup'] = "Stp entre un email valide";
  } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
    $_SESSION['signup'] = "Le mot de passe doit avoir au moins 8 caractères !";
  } elseif (!$avatar['name']) {
    $_SESSION['signup'] = "Stp sélectionne une image";
  } else {
    if ($createpassword !== $confirmpassword) {
      $_SESSION['signup'] = "Les mots de passe ne correspondent pas !";
    } else {
      $hashPassword = password_hash($createpassword, PASSWORD_DEFAULT);

     
      $userSql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
      $userResult = mysqli_query($connection, $userSql);
      
      if (mysqli_num_rows($userResult) > 0) {
        $_SESSION['signup'] = "Nom d'utilisateur ou email déjà utilisé";
      } else {
        
        $time = time();
        $avatar_name = $time . $avatar['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = 'images/' . $avatar_name;
        $allowed_files = ["png", "jpg", "jpeg"];
        $extension_parts = explode('.', $avatar_name);
        $extension = strtolower(end($extension_parts));

        if (in_array($extension, $allowed_files)) {
          if ($avatar['size'] < 1000000) {
            move_uploaded_file($avatar_tmp_name, $avatar_destination_path);


          } else {
            $_SESSION['signup'] = "Le fichier est trop lourd (max 1Mo)";
          }
        } else {
          $_SESSION['signup'] = "Le fichier doit être en png, jpg ou jpeg";
        }
      }
    }
  }

  if (isset($_SESSION['signup'])) {
    $_SESSION['signup-data'] = $_POST;
    header("location: " . ROOT_URL . "signup.php");
    exit();
  } else {
            $insert_user = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin)
            VALUES ('$firstname', '$lastname', '$username', '$email', '$hashPassword', '$avatar_name', 0)";
            
            $insert_user_result = mysqli_query($connection, $insert_user);
            if(!mysqli_errno($connection)){
              $_SESSION['signup-success'] = "Enregistrement réussi";
              header("location: " . ROOT_URL . 'signin.php');
              exit();
            }
  }

} else {
  header("location: " . ROOT_URL . 'signup.php');
  exit();
}


