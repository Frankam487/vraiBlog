<?php 
include './partials/header.php';
?>

<section class="form__section">
  <div class="container form__section-container">
    <h2>Ajouter un post</h2>
    <div class="alert__message error">
      <p>Ca cest un message d'erreur</p>
    </div>
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Titre">
      <select name="" id="">
        <option value="1">Voyage</option>
        <option value="2">Art</option>
        <option value="3">Science & Technologie</option>
        <option value="1"></option>
        <option value="1"></option>
      </select>
      <textarea name="" id="" cols="30" placeholder="Corps" rows="10"></textarea>
      <div class="form__control">
        <input type="checkbox" name="" id="is_featured>
        <label for="is_featured" checked>En vedette</label>
      </div>
      <div class="form__control">
        <label for="thumbnail">La vignette</label>
        <input type="file" name="" id="thumbnail">
      </div>
      <button type="submit" id="btn">Ajouter le poste</button>

    </form>
  </div>
</section>

<?php 
include '../partials/footer.php';
?>