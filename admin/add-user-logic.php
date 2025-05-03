<?php 
require 'config/database.php';
require 'config/constants.php';
if(session_status() === PHP_SESSION_NONE){
  session_start();
}
if (isset($_POST['submit'])) {
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $createpassword = $_POST['createpassword'];
  $confirmpassword = $_POST['confirmpassword'];
  $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
  $avatar = $_FILES['avatar'];
 
  if (!$firstname) {
    $_SESSION['add-user'] = "Stp entre ton nom";
  } elseif (!$lastname) {
    $_SESSION['add-user'] = "Stp entre ton prénom";
  } elseif (!$username) {
    $_SESSION['add-user'] = "Stp entre ton nom d'utilisateur";
  } elseif (!$email) {
    $_SESSION['add-user'] = "Stp entre un email valide";
  } elseif (!$is_admin) {
    $_SESSION['add-user'] = "Stp selectionne le role de l'utilisateur";
  } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
    $_SESSION['add-user'] = "Le mot de passe doit avoir au moins 8 caractères !";
  } elseif (!$avatar['name']) {
    $_SESSION['add-user'] = "Stp sélectionne une image";
  } else {
    if ($createpassword !== $confirmpassword) {
      $_SESSION['add-user'] = "Les mots de passe ne correspondent pas !";
    } else {
      $hashPassword = password_hash($createpassword, PASSWORD_DEFAULT);

     
      $userSql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
      $userResult = mysqli_query($connection, $userSql);
      
      if (mysqli_num_rows($userResult) > 0) {
        $_SESSION['add-user'] = "Nom d'utilisateur ou email déjà utilisé";
      } else {
        
        $time = time();
        $avatar_name = $time . $avatar['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = '../images/' . $avatar_name;
        $allowed_files = ["png", "jpg", "jpeg"];
        $extension_parts = explode('.', $avatar_name);
        $extension = strtolower(end($extension_parts));

        if (in_array($extension, $allowed_files)) {
          if ($avatar['size'] < 1000000) {
            move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

            
            $insert_user = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin)
            VALUES ('$firstname', '$lastname', '$username', '$email', '$hashPassword', '$avatar_name', '$is_admin')";
            
            $insert_user_result = mysqli_query($connection, $insert_user);
            
            if (!mysqli_error($connection)) {
              $_SESSION['add-user-success'] = "Enregistrement réussi";
              header("location: " . ROOT_URL . 'add-user.php');
              exit();
            } else {
              $_SESSION['add-user'] = "Erreur lors de l'enregistrement";
            }

          } else {
            $_SESSION['add-user'] = "Le fichier est trop lourd (max 1Mo)";
          }
        } else {
          $_SESSION['add-user'] = "Le fichier doit être en png, jpg ou jpeg";
        }
      }
    }
  }

 
  if (isset($_SESSION['add-user'])) {
    $_SESSION['add-user-data'] = $_POST;
    header("location: " . ROOT_URL . "add-user.php");
    exit();
  }

} else {
  header("location: " . ROOT_URL . 'add-user.php');
  exit();
}
