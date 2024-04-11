 





async function getpayments() {
  const response = await fetch(`${API_URI}/api/v1/getPayments`, {
    method: "GET",
    headers: {
      Authorization: `Bearer ${getCookie("Token")}`,
      "Content-Type": "application/json",
    },
  });

  const data = await response.json();
  if (response.ok === false) {
    toastit(data.msg, "r");
    return;
  }

  const payments = data.data;

  let tempBody = "";

  for (let index = 0; index < payments.length; index++) {
    const { userId, imgUrl } = payments[index];

     tempBody = `
            <tr>
                <td>${index + 1}</td>
                <td>${userId.name}</td>
                <td>${userId.phoneNumber}</td>
                <td>${userId.email}</td>
                <td>${userId.flatNumber}</td>
                <td>${userId.wing}</td>
                <td class="stats">
                    ${userId.userType}
                </td>
                <td class="payment">
                <a class="viewImage" href="${imgUrl}" target="_blank"  >View Image</a>
                </td>
               
            </tr> 
            `;

        }
        tempBody += tempBody;

  document.getElementById("tbody").innerHTML = tempBody;
}

getpayments();
