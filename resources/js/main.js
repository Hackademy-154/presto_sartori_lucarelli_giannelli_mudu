// Card Show
const allHoverImages = document.querySelectorAll(".imgShow");

if (allHoverImages.length > 0) {
    const imgContainer = document.querySelector(".img-container");

    window.addEventListener("DOMContentLoaded", () => {
        allHoverImages[0].parentElement.classList.add("active");
    });

    allHoverImages.forEach((image) => {
        image.addEventListener("mouseover", () => {
            imgContainer.querySelector("img").src = image.src;
            resetActiveImg();
            image.parentElement.classList.add("active");
        });
    });

    function resetActiveImg() {
        allHoverImages.forEach((img) => {
            img.parentElement.classList.remove("active");
        });
    }
}
// Carrello
let offcanvasExample = document.querySelector("#offcanvasExample");

let wrapper = document.querySelector("#sidebarCart");
let cardCart = document.querySelectorAll(".cardCart");
cardCart = Array.from(cardCart);

let cardElements = [];

cardCart.forEach((el) => {
    let cardTitle = el.querySelector("#cardTitle");
    let cardPrice = el.querySelector("#cardPrice");
    let cardCategory = el.querySelector("#cardCategory");
    let cardIcon = el.querySelector(".cartIcon");

    cardIcon.addEventListener("click", () => {
        if (cardIcon.classList.contains("bi-cart-plus")) {
            wrapper.innerHTML = ``;
            cardIcon.classList.toggle("bi-cart-plus");
            cardIcon.classList.toggle("bi-cart-check");

            let cardElementsNew = {
                title: cardTitle.innerHTML,
                price: cardPrice.innerHTML,
                category: cardCategory.innerHTML,
                id: cardIcon.id,
            };

            let doppione = cardElements.some((el) => {
                el.title === cardElements.title &&
                    el.price === cardElements.price &&
                    el.category === cardElements.category;
            });
            if (!doppione) {
                cardElements.push(cardElementsNew);
            }

            let deleteCardElement;

            function createCards() {
                wrapper.innerHTML = ``;
                cardElements.forEach((el) => {
                    let div = document.createElement("div");

                    div.innerHTML = `
                            <div class="d-flex flex-column justify-content-between align-items-start p-3 my-2 trashItemContainer">
                                <div class="dflex justify-content-between align-items-center">
                                    <h5 class="text-dark">${el.title}</h5>
                                    <h5 class="text-dark">${el.price}</h5>
                                </div>
                                <div class="d-flex justify-content-between align-content-center trashItem2">
                                    <p class="text-dark">${el.category}</p>
                                    <i class="bi bi-trash3-fill" id=""></i>
                                </div>
                            </div>
                `;
                    wrapper.appendChild(div);
                });
                deleteCardElement = wrapper.querySelectorAll(".bi-trash3-fill");
                deleteCardElement.forEach((el, i) => {
                    el.addEventListener("click", () => {
                        let elemento = cardElements.find((el, j) => j == i);
                        let icona = document.querySelector(`#${elemento.id}`);
                        icona.classList.remove("bi-cart-check");
                        icona.classList.add("bi-cart-plus");
                        cardElements.splice(i, 1);
                        createCards();
                    });
                });
            }
            createCards();
        } else {
            wrapper.innerHTML = ``;
            cardElements = cardElements.filter(
                (el) => el.title !== cardTitle.innerHTML
            );

            cardIcon.classList.toggle("bi-cart-plus");
            cardIcon.classList.toggle("bi-cart-check");

            cardElements.forEach((el) => {
                let div = document.createElement("div");
                div.innerHTML = `
            <div class="d-flex flex-column">
                <h5 class="text-dark text-start">Titolo: ${el.title}</h5>
                <h5 class="text-dark text-start">${el.price}</h5>
                <p class="text-dark text-start">${el.category}</p>
                <i class="bi bi-trash3-fill" id=""></i>
            </div>
            `;
                wrapper.appendChild(div);
            });
        }
    });
});
