const paymentVisted = JSON.parse(sessionStorage.getItem("isPaymentVisted"))

if (paymentVisted) {
    toastit("Please login first","r")
    sessionStorage.setItem("isPaymentVisted","false")
}