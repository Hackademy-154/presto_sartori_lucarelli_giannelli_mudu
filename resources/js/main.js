let card = document.querySelectorAll("#card");

card.forEach((el) => {
    let cardLeft = el.querySelector(".cardLeft");
    let cardRight = el.querySelector(".cardRight");

    cardLeft.addEventListener("mouseenter", () => {
        cardRight.classList.remove("d-none");
        cardRight.classList.add("active");
    });
    el.addEventListener("mouseleave", () => {
        cardRight.classList.add("d-none");
        cardRight.classList.remove("active");
    });
});
