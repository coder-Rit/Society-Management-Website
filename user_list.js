let isClicked = true;

const btnClick = document.querySelector('.status');
let changeStatus = function () {
    if(isClicked){
        btnClick.addEventListener('click', () => {
            btnClick.innerText = "Inactive";
            btnClick.style.backgroundColor = "rgba(240, 199, 185, 0.671)"
            btnClick.style.color = "red";
        });
        isClicked = false;
    }
    else{
        btnClick.addEventListener('click', () => {
            btnClick.innerText = "Active";
            btnClick.style.backgroundColor = " rgba(185, 240, 196, 0.671)"
            btnClick.style.color = "green";
        });
        isClicked = true;
    }
}