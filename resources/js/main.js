let cardRight = document.querySelector(".cardRight");
let cardLeft = document.querySelector("#cardLeft");

cardLeft.addEventListener("mouseenter", () => {
    cardRight.classList.remove("d-none");
    cardRight.classList.add("active");
});
cardLeft.addEventListener("mouseleave", () => {
    cardRight.classList.add("d-none");
    cardRight.classList.remove("active");
});
