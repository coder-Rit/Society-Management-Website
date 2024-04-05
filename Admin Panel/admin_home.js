const image_input = document.querySelector("#file1");
var uploaded_image = "";
image_input.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview1").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})

// function imageDispay(fileId, previewId) {
//     const image_input = document.querySelector(fileId);
//     var uploaded_image = "";
//     image_input.addEventListener("change", function () {
//         const reader = new FileReader();
//         reader.addEventListener("load", () => {
//             uploaded_image = reader.result;
//             document.querySelector(previewId).style.backgroundImage = `url(${uploaded_image})`;
//         });
//         reader.readAsDataURL(this.files[0]);
//     })
// }
 


const image_input2 = document.querySelector("#file2");
var uploaded_image = "";
image_input2.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview2").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input3 = document.querySelector("#file3");
var uploaded_image = "";
image_input3.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview3").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input4 = document.querySelector("#file4");
var uploaded_image = "";
image_input4.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview4").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input5 = document.querySelector("#file5");
var uploaded_image = "";
image_input5.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview5").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input6 = document.querySelector("#file6");
var uploaded_image = "";
image_input6.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image = reader.result;
        document.querySelector("#preview6").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
})