const burger = document.querySelector("#burger");
const menu = document.querySelector("#menu");

burger.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    menu.classList.toggle("block");
});