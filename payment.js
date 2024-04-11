 
 
async function submitScreenshot(imgUrl) {
	 
	 const Token = getCookie("Token")
	if (!Token) {
		toastit("Please login first","r")
		setTimeout(() => {
			window.location = CLIENT_URI+"/index.html"
		}, 1000);

	}

	const formData = {
		"imgUrl": imgUrl,
		 "Token":  Token
	}
	try {
		const response = await fetch(`${API_URI}/api/v1/addPayment`, {
			method: "POST",
			headers:{
				Authorization: `Bearer ${token}`,
				"Content-Type": "application/json",
			},
			body: JSON.stringify(formData)

		})
		
		const data = await response.json()
		if (response.ok === false) {
			toastit(data.msg,"r")
			return
	
		}
	
		toastit("Payment Acknolegment Uploaded","s")

        setTimeout(() => {
            window.location = CLIENT_URI+"/index.html"
            
        }, 3000);

	} catch (error) {
		console.log(error);
	}
}