// Card Show

const allHoverImages = document.querySelectorAll(
    ".imgShow"
);

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

let sidebarCart = document.querySelector('#sidebarCart');

let offcanvasExample = document.querySelector('#offcanvasExample');
let cardCart = document.querySelector('#cardCart');
let icon = document.querySelector('.cartIcon');
if (icon) {
    let cartIcon = document.querySelectorAll('.cartIcon');
    console.log(cartIcon);

    cartIcon.forEach((cart) => {
        cart.addEventListener('click', () => {
            cart.classList.toggle('bi-cart-plus');
            cart.classList.toggle('bi-cart-check');
            if (cart.classList.contains('bi-cart-check')) {
                sidebarCart.innerHTML =
                    `
                    <div class="d-flex justify-content-evenly align-items-center">
                        <h5 class="text-dark">{{$article->name}}</h5>
                        <p class="text-dark">{$article->price}</p>
                    </div>`;
                console.log('ciao');
            }
        })
    })
}


