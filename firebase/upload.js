 
var firebaseConfig = {
    apiKey: "AIzaSyB3GKlkN1C8k2tvuwJ9yrsruJat4Y32PjU",
    authDomain: "dreams-ffc00.firebaseapp.com",
    projectId: "dreams-ffc00",
    storageBucket: "dreams-ffc00.appspot.com",
    messagingSenderId: "500615449878",
    appId: "1:500615449878:web:8820b5bcbb84e335be9437"
  };
  
  
  firebase.initializeApp(firebaseConfig);
  
  
  var messagesRef = firebase.database().ref('Checking');
  document.getElementById('contactForm').addEventListener('submit', submitForm); //uploading file in storage function uploadimage() {
  
  
  
  function uploadimage(dynamicId,folderName,cb) {
  
    var file = document.getElementById(dynamicId).files[0];
    if (!file) {
      toastit("Please Upload a File ","r")
      return
    }
  
    toastit("Uploading Image ","w")
  
    var storage = firebase.storage();
    var storageref = storage.ref();
    var thisref = storageref.child(folderName).child(file.name).put(file);
    thisref.on('state_changed', function (snapshot) { }, function (error) { }, function () {
        // Uploaded completed successfully, now we can get the download URL
        thisref.snapshot.ref.getDownloadURL().then(function (downloadURL) { 
             
          toastit("Image Uploaded ","w")
            cb(downloadURL)
  
        });
    });
  } 
   
  