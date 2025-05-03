<?php 
include './partials/header.php';
?>
<section class="form__section">
  <div class="container form__section-container">
    <h2>Ajouter un utilisateur</h2>
    <div class="alert__message error">
      <p>Ca cest un message d'erreur</p>
    </div>
   <form action="<?= ROOT_URL?>admin/add-user-logic.php" method="POST">
      <input type="text" name="firstname" placeholder="Prenom">
      <input type="text" name="lastname" placeholder="Nom">
      <input type="text" name="username" placeholder="pseudo">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="createpassword" placeholder="Mot de passe">
      <input type="password" name="confirmpassword" placeholder="Confirm Mot de passe">
      <select name="userrole" id="">
        <option value="0">Auteur</option>
        <option value="1">Admin</option>
      </select>
      <div class="form__control">
        <label for="avatar">Avatar de L'utilisateur</label>
        <input name="avatar" type="file" id="avatar" >
      </div>
      <button type="submit" name="submit" id="btn">Ajouter un utilisateur</button>
     
    </form>
  </div>
</section>



  <?php 
  include '../partials/header.php';
  ?>