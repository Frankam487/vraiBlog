document.addEventListener("DOMContentLoaded", () => {
  const openNavBtn = document.querySelector("#open__nav-btn");
  const closeNavBtn = document.querySelector("#close__nav-btn");
  const navItems = document.querySelector(".nav__items");

  // Ouvrir le menu
  openNavBtn.addEventListener("click", () => {
    navItems.classList.add("active");
  });

  // Fermer le menu
  closeNavBtn.addEventListener("click", () => {
    navItems.classList.remove("active");
  });

  // Fermer le menu quand on clique sur un lien
  navItems.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navItems.classList.remove("active");
    });
  });

  // Fermer le menu en cliquant à l'extérieur
  document.addEventListener("click", (e) => {
    if (
      !navItems.contains(e.target) &&
      !openNavBtn.contains(e.target) &&
      navItems.classList.contains("active")
    ) {
      navItems.classList.remove("active");
    }
  });


  navItems.querySelectorAll("a").forEach((link) => {
    link.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        link.click();
      }
    });
  });
});
