<?php
Session_START();
include("model.class.php");
$users = new users();
$id = 2;
$email =$_POST['email'];
$password =$_POST['password'];
$ifExist = $users->checkemail($email);

    if($ifExist > 0){                                     // Email is Exist
        $data = $users->findbyemail($email);
        $DBemail = $data['email'];
        $DBpassword = $data['password'];
        $Fname = $data['Fname'];
        $Sname = $data['Sname'];
        $userRole = $data['userRole'];
        if($email == $DBemail && $password == $DBpassword){//email and password MATCHED
            echo "Loged In";

            $_SESSION['email'] = $email;
            $_SESSION['firstName'] = $Fname;
            $_SESSION['seconName'] = $Sname;
            $_SESSION['password'] = $DBpassword;
            $_SESSION['userRole'] = $userRole;
            
            header('refresh:0;url=index.php');
        }else{
            echo "Wrong Password";
            header('refresh:1;url=index.php');
        }
    }else{
        echo $email . "<br>There is no Such File";
        header('refresh:1;url=index.php');
    }




?>