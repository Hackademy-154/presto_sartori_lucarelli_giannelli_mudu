let card = document.querySelectorAll("#card");

card.forEach((el) => {
    let cardLeft = el.querySelector(".cardLeft");
    let cardRight = el.querySelector(".cardRight");

    cardLeft.addEventListener("mouseenter", () => {
        cardRight.classList.add("active");
    });
    el.addEventListener("mouseleave", () => {
        cardRight.classList.remove("active");
    });
});



// Card Show

const allHoverImages = document.querySelectorAll('.contImgDettaglio .img-dettaglio img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded', () => {
    allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');
    });
});

function resetActiveImg(){
    allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}