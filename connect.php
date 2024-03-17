<?php

// get the post records
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost','root','','db_signup');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into tbl_contact(name, phone, email, message)
            values(?, ?, ?, ?)");
    $stmt->bind_param("siss", $name, $gender, $email, $password, $phone);
    $stmt->execute();
    echo "Your Contact Details have been Received";
    $stmt->close();
    $conn->close();
}  

?>