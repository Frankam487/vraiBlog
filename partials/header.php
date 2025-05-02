<?php
require "./config/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog php</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <nav>
    <div class="container nav__container">
      <a href="<?= ROOT_URL ?>" class="nav__logo">Frankam.</a>
      <ul class="nav__items">
        <li><a href="<?= ROOT_URL ?>/blog.php">Blog</a></li>
        <li><a href="<?= ROOT_URL ?>/about.php">About</a></li>
        <li><a href="<?= ROOT_URL ?>/services.php">Services</a></li>
        <li><a href="<?= ROOT_URL ?>/contact.php">Contact</a></li>
        <li><a href="<?= ROOT_URL ?>/signin.php">Sign in</a></li>
        <li class="nav__profile">
          <div class="avatar">
            <img src="./images/people-centered-care-wcd2025.jpg.webp" alt="Avatar de l'utilisateur">
          </div>
          <ul>
            <li><a href="<?= ROOT_URL ?>/admin/index.php">Dashboard</a></li>
            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <button id="open__nav-btn" aria-label="Ouvrir le menu"><i class="uil uil-bars"></i></button>
      <button id="close__nav-btn" aria-label="Fermer le menu"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>
 
