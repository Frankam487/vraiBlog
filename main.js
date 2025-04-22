document.getElementById("open__nav-btn").addEventListener("click", () => {
  document.querySelector(".nav__items").classList.add("active");
  document.getElementById("open__nav-btn").style.display = "none";
  document.getElementById("close__nav-btn").style.display = "block";
});

document.getElementById("close__nav-btn").addEventListener("click", () => {
  document.querySelector(".nav__items").classList.remove("active");
  document.getElementById("open__nav-btn").style.display = "block";
  document.getElementById("close__nav-btn").style.display = "none";
});
