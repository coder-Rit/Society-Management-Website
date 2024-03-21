<?php

if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database.php";
    $sql = "SELECT * FROM tbl_register WHERE email = '$email'";
    $result= mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($user){
        if(password_verify($password, $user["password"])){
            header("Location: homepage.html");
            die();
        }else{
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>Email does not match</div>";
    }
}
?>