let cat = document.getElementById("cat");
let main_menu = document.getElementById("sub_menu");

cat.addEventListener("click", () => {
  main_menu.classList.toggle("hidden");
});
