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




let icon = document.querySelector('.heartIcon');
if (icon) {
    let cuoreIcon = document.querySelectorAll('.heartIcon');
    console.log(cuoreIcon);
    cuoreIcon.forEach((cuore) => {
        cuore.addEventListener('click', () => {
            cuore.classList.toggle('bi-heart');
            cuore.classList.toggle('bi-heart-fill');
        })
    })
}