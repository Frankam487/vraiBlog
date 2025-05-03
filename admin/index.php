<?php 
include './partials/header.php';
?>

<section class="dashboad">
  <div class="conatiner dashboad__container">
    <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
    <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
    <aside>
      <ul>
        <li>
          <a href="add-post.php"><i class="uil uil-pen"></i>
        <h5>Ajouter un post</h5>
        </a>
      </li>
        <li>
          <a href="index.php" class="active"> <i class="uil uil-postcard"></i>
        <h5>gerer les posts</h5>
        </a>
      </li>
       <?php if (isset($_SESSION['user-is_admin'])) : ?>
        <li>
          <a href="add-user.php"><i class="uil uil-user-plus"></i>
        <h5>Ajouter un utilisateur</h5>
        </a>
      </li>
        <li>
          <a href="manage-users.php"><i class="uil uil-pen"></i>
        <h5>Gerer un utilisateur</h5>
        </a>
      </li>
        <li><a href="add-category.php"><i class="uil uil-user-plus"></i>
        <h5>Ajouter une categorie</h5>
        </a></li>
        <li><a href="manage-categories.php" ><i class="uil uil-pen"></i>
        <h5>Gerer les Utilisateurs</h5>
        </a></li>
        <?php endif ?>
      </ul>
    </aside>
    <main>
      
      <h2>Gerer les Utilisateurs</h2>
      
      <table>
        <thead>
          <tr>

            <th>Titre</th>
            <th>Categorie</th>
            <th>Editer</th>
            <th>Supprimer</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
            <td>Musique</td>
            <td><a href="edit-post.php" class="btn edit">Editer</a></td>
            <td><a href="delete-user.php" class="btn sm danger">Supprimer</a></td>
            
          </tr>
          <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
            <td>Musique</td>
            <td><a href="edit-post.php" class="btn edit">Editer</a></td>
            <td><a href="delete-user.php" class="btn sm danger">Supprimer</a></td>
            
          </tr>
          <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
            <td>Musique</td>
            <td><a href="edit-post.php" class="btn edit">Editer</a></td>
            <td><a href="delete-user.php" class="btn sm danger">Supprimer</a></td>
            
          </tr>
          
        </tbody>
      </table>
    </main>
  </div>
</section>



<!-- ==============footer============== -->


<?php 
include '../partials/footer.php';
?>