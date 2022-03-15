<?php
session_start();
if(isset($_POST) && !empty($_POST)){

// ============================Fetch personal data from "reg.php"
    $fName  = $_POST['Fname']; 
    $sName=$_POST["Sname"];
    $adress =$_POST["adress"];
    $zib=  filter_var( $_POST["zib"] , FILTER_SANITIZE_NUMBER_INT);
    $dob=$_POST["dob"];
    $email=  filter_var( $_POST["email"] ,FILTER_SANITIZE_EMAIL);
    $phone=$_POST["phone"];
    $ssn= filter_var( $_POST["ssn"] , FILTER_SANITIZE_NUMBER_INT);
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];
// ==================================Checking Insert Errors 
    if($password != $Cpassword){
        echo "<h1 style='color:red'>Password Doesn't Match</h1>";
        header('refresh:1;url=reg.php');
    
    
    }else{
        include("model.class.php");
        echo "Password Match";
        $hashedPass = password_hash($password , PASSWORD_DEFAULT);
        
        header('refresh:2;url=index.php');
    }
}else{
// Empty Data
}