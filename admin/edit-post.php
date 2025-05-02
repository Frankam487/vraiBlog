<?php 
include './partials/header.php';
?>
<section class="form__section">
  <div class="container form__section-container">
    <h2>Editer un post</h2>
   
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Titre">
      <select name="" id="">
        <option value="1">Voyage</option>
        <option value="1">Art</option>
        <option value="1">Science & Technologie</option>
        <option value="1"></option>
        <option value="1"></option>
      </select>
      <textarea name="" id="" cols="30" placeholder="Corps" rows="10"></textarea>
      <div class="form__control">
        <input type="checkbox" name="" checked id="is_featured>
        <label for="is_featured" >En vedette</label>
      </div>
      <div class="form__control">
       <div class="vignette">
         <label for="thumbnail">Changer La vignette</label>
        <input type="file" name="" id="thumbnail">
       </div>
      </div>
      <button type="submit" id="btn">Editer le poste</button>

    </form>
  </div>
</section>

<?php 
include '../partials/footer.php';
?>