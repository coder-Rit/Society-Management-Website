async function getUser() {

    const response = await fetch("https://socity-server-fourise.onrender.com/api/v1/getmembers", {
        method: "GET"
    })

    if (response.ok === false) {
        console.log("error");
        return
    }

    const data = await response.json()

    const users = data.users

    let fullTbody = ""

    for (let index = 0; index < users.length; index++) {
        console.log(data)
        const element = users[index];

        const tempBody =

            `
            <tr>
                <td>${index + 1}</td>
                <td>${element.name}</td>
                <td>${element.phoneNumber}</td>
                <td>${element.email}</td>
                <td>${element.flatNumber}</td>
                <td>${element.wing}</td>
                <td class="stats">
                    ${element.userType}
                </td>
                <td class="payment">
                    <input type="file" id="file1" accept="image/png, image/jpg, image/jpeg" style="width: 180px;">
                    <button id="show">&#x1F441;</button>   
                    <div class="preview" id="preview"></div> 
                </td>
                <td class="operation">
                    <button><img src="/Feature images/delete_icon.png" alt=""></button>
                </td>
            </tr> 
            `

        fullTbody += tempBody

    }

    console.log(fullTbody);

    document.getElementById("tbody").innerHTML = fullTbody
}


getUser()

let isClicked = true;
const divContainer = document.querySelector("#preview");
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