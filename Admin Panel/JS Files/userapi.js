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
                    <a href="/Feature images/delete_icon.png" target="blank">
                        <img src=/Feature images/delete_icon.png" alt="">
                    </a>   
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

