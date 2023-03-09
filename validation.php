<?php
session_start();
include ('dbData.php');
if(isset($_POST['submitBtn']))
{
    $email = $_POST['userEmail'];
    $pass = $_POST['userPass'];


    if(validateEmptyData($email,$pass)){
        header("Location: login.php");
    }else if(validoTeDhenat($email,$pass)){
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }
}

    function validateEmptyData($email,$password){
        if(empty($email)||empty($password)){
            return true;
        }else {
            return false;
        }
    }

function validoTeDhenat($email, $pass){
    global $allUsers;
    foreach ($allUsers as $user) {
        if ($user['email'] == $email && $user['password'] == $pass) {
            $_SESSION['roli']=$user['role'];
            $_SESSION['emri']=$user['name'];
            $_SESSION['kohaLogin'] = date("Y-m-d h:i:sa");
            return true;
        }
    }
}


?>