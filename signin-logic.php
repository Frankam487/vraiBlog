<?php
session_start(); // IMPORTANT
require './config/database.php';

if (isset($_POST['btn'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = "Pseudo ou Email est requis";
    } elseif (!$password) {
        $_SESSION['signin'] = "Le mot de passe est requis";
    } else {
        // Sécurisation : requête préparée
        $stmt = mysqli_prepare($connection, "SELECT * FROM users WHERE username = ? OR email = ?");
        mysqli_stmt_bind_param($stmt, "ss", $username_email, $username_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $user_record = mysqli_fetch_assoc($result);
            if (password_verify($password, $user_record['password'])) {
                $_SESSION['user-id'] = $user_record['id'];

                if ($user_record['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                    header("Location: " . ROOT_URL . "admin/");
                } else {
                    header("Location: " . ROOT_URL . "admin");
                }
                exit;
            } else {
                $_SESSION['signin'] = "Mot de passe incorrect.";
            }
        } else {
            $_SESSION['signin'] = "Utilisateur non trouvé !";
        }
    }

    header("Location:" . ROOT_URL . "signin.php");
    exit;
} else {
    header("Location:" . ROOT_URL . "signin.php");
    exit;
}
?>
