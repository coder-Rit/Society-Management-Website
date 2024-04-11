const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

 
signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});



async function signUp() {
  const name = document.getElementById("name").value;
  const phone = document.getElementById("phone").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const flat = document.getElementById("flat").value;
  const wing = document.getElementById("wing").value;

  const formData = {
    name: name,
    phoneNumber: phone,
    email: email,
    password: password,
    flatNumber: flat,
    wing: wing,
  };

  console.log(formData);

  try {
    const response = await fetch(`${API_URI}/api/v1/signup`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    });

    const data = await response.json();
    if (response.ok === false) {
      toastit(data.msg, "r");
      return;
    }

    toastit("Sign up Successfull", "s");
    localStorage.setItem("role", data.user.userType);


    setTimeout(() => {
      window.location = CLIENT_URI + "/payment.html";
    }, 3000);

  } catch (error) {
    console.log(error);
  }
}

async function logIn() {
  const email = document.getElementById("log_email").value;
  const password = document.getElementById("log_pass").value;

  const formData = {
    email: email,
    password: password,
  };
  try {
    const response = await fetch(`${API_URI}/api/v1/login`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    });

    const data = await response.json();
    if (response.ok === false) {
      toastit(data.msg, "r");
      return;
    }

    setCookie("Token", data.Token, 40);

    localStorage.setItem("role", data.user.userType);

    toastit("Login Successfull", "s");
    setTimeout(() => {
      window.location = CLIENT_URI + "/payment.html";
    }, 3000);

  } catch (err) {
    console.log(err);
  }
}
