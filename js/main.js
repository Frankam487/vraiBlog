document.addEventListener("DOMContentLoaded", () => {
  const openNavBtn = document.querySelector("#open__nav-btn");
  const closeNavBtn = document.querySelector("#close__nav-btn");
  const navItems = document.querySelector(".nav__items");


  openNavBtn.addEventListener("click", () => {
    navItems.classList.add("active");
  });


  closeNavBtn.addEventListener("click", () => {
    navItems.classList.remove("active");
  });


  navItems.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navItems.classList.remove("active");
    });
  });

 
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


const sidebar = document.querySelector('aside');
const showSideBarBtn = document.getElementById('show__sidebar-btn');
const hideSideBarBtn = document.getElementById('hide__sidebar-btn');

const showSideBar = () => {
  sidebar.style.left = '0';
  showSideBarBtn.style.display = 'none';
  hideSideBarBtn.style.display = 'inline-block';
}
const hideSideBar = () => {
  sidebar.style.left = '-100%';
  showSideBarBtn.style.display = 'inline-block';
  hideSideBarBtn.style.display = 'none';
}
showSideBarBtn.addEventListener('click', showSideBar)
hideSideBarBtn.addEventListener('click', hideSideBar)