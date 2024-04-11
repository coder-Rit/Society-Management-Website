//production
// var API_URI ="http://localhost:4000"
// var CLIENT_URI = "https://dreamsankalp.in";

//development
var API_URI ="https://socity-server-fourise.onrender.com"
var CLIENT_URI = "http://127.0.0.1:5500";


function getCookie(name) {
  let cookieArray = document.cookie.split(";"); // Split the cookie string into an array
  for (let i = 0; i < cookieArray.length; i++) {
    let cookiePair = cookieArray[i].split("="); // Split each individual cookie into its name and value
    let cookieName = cookiePair[0].trim(); // Trim whitespace from the cookie name
    if (cookieName === name) {
      return decodeURIComponent(cookiePair[1]); // Decode and return the cookie value
    }
  }
  return null; // Return null if the cookie was not found
}

const token = getCookie("Token");
localStorage.setItem("currentBlogID", "");

if (!token) {
  toastit("Please login first", "r");
}
