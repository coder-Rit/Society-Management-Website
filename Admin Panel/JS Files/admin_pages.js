function handleFileSelect(input, preview) {
    const file = input.files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
        preview.innerHTML = `<img src="${e.target.result}" alt="Preview Image" style = "width: 295px; height: 180px;">`;
    }

    reader.readAsDataURL(file);
}


function handleFileInput() {
    handleFileSelect(this, this.nextElementSibling);
}


document.querySelectorAll('input[type="file"]').forEach(input => {
    input.addEventListener('change', handleFileInput);
});


document.getElementById('submitBtn').addEventListener('click', function() {

    const title1 = document.getElementById('title1').value;
    const description1 = document.getElementById('description1').value;
    const title2 = document.getElementById('title2').value;
    const description2 = document.getElementById('description2').value;
    const title3 = document.getElementById('title3').value;
    const description3 = document.getElementById('description3').value;

    console.log("Title 1:", title1);
    console.log("Description 1:", description1);
    console.log("Title 2:", title2);
    console.log("Description 2:", description2);
    console.log("Title 3:", title3);
    console.log("Description 3:", description3);
});