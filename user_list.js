let isClicked = true;

const btnClick = document.querySelector('.status');
let changeStatus = function () {
    if(isClicked){
        btnClick.addEventListener('click', () => {
            btnClick.innerText = "Member";
        });
        isClicked = false;
    }
    else if(isClicked){
        btnClick.addEventListener('click', () => {
            btnClick.innerText = "Tenant";
        });
        isClicked = false;  
    }
    else{
        btnClick.addEventListener('click', () => {
            btnClick.innerText = "User";
        });
        isClicked = true;
    }
}