// const popUp = document.querySelector("#popup");
let isClicked = true;

// function for price info
const divContainer = document.querySelector("#cont1");
let show = function () {
    if (isClicked) {
        divContainer.style.display = 'block';
        isClicked = false;
    }
    else {
        divContainer.style.display = 'none'
        isClicked = true;
    }
}

// JS for modal opening
const modal = document.querySelector('.modal');
const openModal = document.querySelector('.contact');
const closeModal = document.querySelector('.close');

openModal.addEventListener('click', () => {
    modal.showModal();
})
closeModal.addEventListener('click', () => {
    modal.close();
})

// JS Reading hidden paragraph
const toggleButton = document.getElementById("drop");
const hiddenParagraph = document.getElementById("hidden-paragraph");

toggleButton.addEventListener("click", function () {
    if (hiddenParagraph.style.overflow === "hidden" || hiddenParagraph.style.overflow === "") {
        hiddenParagraph.style.overflow = "visible";
    } else {
        hiddenParagraph.style.overflow = "hidden";
    }
});

// Carousel
