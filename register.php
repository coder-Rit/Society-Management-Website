<?php 

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $flatNumber = $_POST['flatnumber'];
    $wing = $_POST['wing'];
    $typeOfUser = $_POST['typeofuser'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();
    if(empty($name) OR empty($phone) OR empty($email) OR empty($password) OR empty($flatNumber) OR empty($wing) OR empty($typeOfUser)){
        array_push($errors, "All fields are required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    if(strlen($password)< 8){
        array_push($errors, "Password must be alteast 8 characters long");
    }
    require_once "database.php";
    $sql= "SELECT * FROM tbl_register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        array_push($errors, "Email Already exist!!");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }else{
        
        $sql = "INSERT INTO tbl_register (name, phone, email, password, flatnumber, wing, typeofuser) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt,"sississ", $name, $phone, $email, $passwordHash, $flatNumber, $wing, $typeOfUser);
            mysqli_stmt_execute($stmt);
            echo "<div class= 'alert alert-success'>You are registered Successfully</div>";
        }else {
            die("Something went wrong");
        }
    }
}
?>