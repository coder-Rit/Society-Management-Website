


async function getRecentCirculars() {
	 
    const CircularsDiv = document.getElementById("CircularsDiv")
    let temp =`
    <h1>Notice</h1>
    
    `

   
   try {
       const response = await fetch(`${API_URI}/api/v1/getRecentCirculars`, {
           method: "GET",
           headers:{
               'Content-Type':'application/json',
           },
       })
       
       const data = await response.json()
       if (response.ok === false) {
           toastit(data.msg,"r")
           return
   
       }

       console.log(data.data);

       for (let i = 0; i < data.data.length; i++) {
        const element = data.data[i];

        temp += `
        
        <div class="notice">
            <h3>${element.date}</h3>
            <div class="notice-item">
                <img src="${element.imgUrl} "
                    alt="Notice Image">
                <h3>${element.paragraph1} </h3>
                <h3>${element.paragraph1} </h3>
            </div>

        </div>
        `
        
       }


   
       
       CircularsDiv.innerHTML = temp

      

   } catch (error) {
       console.log(error);
   }
}

getRecentCirculars()