 

async function getCirculars() {
  const response = await fetch(`${API_URI}/api/v1/getRecentCirculars`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json",
    },
  });

  const data = await response.json();
  if (response.ok === false) {
    toastit(data.msg, "r");
    return;
  }

  const circulars = data.data;
  console.log(circulars);

  let temp = "";

  for (let index = 0; index < circulars.length; index++) {
    const { imgUrl, date, paragraph1, paragraph2 } = circulars[index];

    const tempBody = `
    <div class="box">
    <h2 class="title">Notice No.${index + 1}</h2>
    <span class="title">${date}</span> 
     
    <div id="preview1">
    <img  class="preview" src="${imgUrl}" />
    </div>
    <textarea placeholder="Description" id="description1">${paragraph1}</textarea>
    <textarea placeholder="Description" id="description1">${paragraph2}</textarea>
</div>
            `;

    temp += tempBody;
  }

  document.getElementById("circularDIv").innerHTML = temp;
}

getCirculars();

function addNewCircualr() {
  const div = document.createElement("div");

  div.innerHTML = `
    
    <div class="box">
                 
                <input type="file" id="file1" accept="image/png, image/jpg, image/jpeg">
                <div class="preview" id="preview1"></div>
                <input type="text" placeholder="date" id="Newdate1"> 
                  
                <textarea placeholder="Description" id="Newdescription1"></textarea>
                <textarea placeholder="Description" id="Newdescription2"></textarea>
                
            <div  class="viewImage" onclick="(uploadimage('file1','circulars',addCircualr))" onclick=addCircualr()>Add</div>
              
            </div>
    `;

  document.getElementById("circularDIv").appendChild(div);
}

async function addCircualr(imgUrl) {
  const Newdate1 = document.getElementById("Newdate1").value;
  const Newdescription1 = document.getElementById("Newdescription1").value;
  const Newdescription2 = document.getElementById("Newdescription2").value;

  const formData = {
    imgUrl: imgUrl,
    date: Newdate1,
    paragraph1: Newdescription1,
    paragraph2: Newdescription2,
  };
  try {
    const response = await fetch(`${API_URI}/api/v1/addCircular`, {
      method: "POST",
      headers: {
        Authorization: `Bearer ${getCookie("Token")}`,
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    });

    const data = await response.json();
    if (response.ok === false) {
      toastit(data.msg, "r");
      return;
    }

    toastit("Circular Created", "s");

    setTimeout(() => {
      window.location = CLIENT_URI + "/blog.html";
    }, 3000);
  } catch (error) {
    console.log(error);
  }
}
