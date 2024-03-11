const divContainer = document.querySelector("#cont1");
// const popUp = document.querySelector("#popup");
const modal= document.querySelector('#modal');
let isClicked = true;

let show = function(){
    if(isClicked){
        divContainer.style.display = 'block';
        isClicked = false;
    }
    else{
        divContainer.style.display = 'none'
        isClicked = true;
    }
}

const openModal= document.querySelector('.contact');
const closeModal= document.querySelector('.close');

openModal.addEventListener('click',() =>{
    modal.showModal();
})
closeModal.addEventListener('click',() =>{
    modal.close();
})
