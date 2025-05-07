<?php
include "./partials/header.php"
?>


<section class="search__bar">
  <form action="" class="container search__bar-container">
    <div class="">
      <i class="uil uil-search"></i>
      <input type="search" name="" placeholder="Rechercher">
    </div>
    <button type="submit" class="btn">OK</button>
  </form>
</section>



  <section class="posts">
    <div class="container posts__container">
      <article class="post">
        <div class="post__thumbnail">
          <img src="./images/people-centered-care-wcd2025.jpg.webp" alt="Image de l'article sur la faune">
        </div>
        <div class="post__info">
          <a href="#" class="category__button">Wild Life</a>
          <h3 class="post__title">
            <a href="post.php">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, iure.</a>
          </h3>
          <p class="post__body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti corporis ad dolore iste? Numquam, eveniet nihil excepturi illo ex libero!
          </p>
          <div class="post__author">
            <div class="post__author-avatar">
              <img src="./images/people-centered-care-wcd2025.jpg.webp" alt="Avatar de Franko le Boy">
            </div>
            <div class="post__author-info">
              <h5>Par: Franko le Boy</h5>
              <small>17 Avril 2025 - 12:00</small>
            </div>
          </div>
        </div>
      </article>
      <article class="post">
        <div class="post__thumbnail">
          <img src="./images/people-centered-care-wcd2025.jpg.webp" alt="Image de l'article sur la faune">
        </div>
        <div class="post__info">
          <a href="#" class="category__button">Wild Life</a>
          <h3 class="post__title">
            <a href="post.php">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, iure.</a>
          </h3>
          <p class="post__body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti corporis ad dolore iste? Numquam, eveniet nihil excepturi illo ex libero!
          </p>
          <div class="post__author">
            <div class="post__author-avatar">
              <img src="./images/people-centered-care-wcd2025.jpg.webp" alt="Avatar de Franko le Boy">
            </div>
            <div class="post__author-info">
              <h5>Par: Franko le Boy</h5>
              <small>17 Avril 2025 - 12:00</small>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="category__buttons">
    <div class="container category__buttons-container">
      <a href="#" class="category__button">Art</a>
      <a href="#" class="category__button">Wild Life</a>
      <a href="#" class="category__button">Travel</a>
      <a href="#" class="category__button">Food</a>
      <a href="#" class="category__button">Music</a>
      <a href="#" class="category__button">Science & Technology</a>
    </div>
  </section>

  <?php
include "./partials/footer.php";
?>