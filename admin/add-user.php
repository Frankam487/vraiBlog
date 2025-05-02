<?php 
include './partials/header.php';
?>
<section class="form__section">
  <div class="container form__section-container">
    <h2>Ajouter un utilisateur</h2>
    <div class="alert__message error">
      <p>Ca cest un message d'erreur</p>
    </div>
   <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Prenom">
      <input type="text" placeholder="Nom">
      <input type="text" placeholder="pseudo">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Mot de passe">
      <input type="password" placeholder="Confirm Mot de passe">
      <select name="" id="">
        <option value="0">Auteur</option>
        <option value="1">Amin</option>
      </select>
      <div class="form__control">
        <label for="avatar">Avatar de L'utilisateur</label>
        <input type="file" id="avatar">
      </div>
      <button type="submit" id="btn">Ajouter un utilisateur</button>
     
    </form>
  </div>
</section>



  <?php 
  include '../partials/header.php';
  ?>