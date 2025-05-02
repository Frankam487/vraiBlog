<?php 
include './partials/header.php';
?>
<section class="form__section">
  <div class="container form__section-container">
    <h2>Editer l'utilisateur</h2>
   
   <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Prenom">
      <input type="text" placeholder="Nom">
      <select name="" id="">
        <option value="0">Auteur</option>
        <option value="1">Admin</option>
      </select>
      
      <button type="submit" id="btn">Editer l'utilisateur</button>
     
    </form>
  </div>
</section>

<?php 
include '../partials/footer.php';
?>