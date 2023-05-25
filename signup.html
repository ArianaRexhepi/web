<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!--CSS-->
    <title>Login and Registration Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' ,sans-serif;
}
body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
}
.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background-color:white;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0,0.1);
    overflow: hidden;
    margin: 0 20px;
}
.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200% ;
    transition: height 0.2s ease;
}
.container .form{
    width: 50%;
    padding: 30px;
    background-color: white;
    transition: margin-left 0.18s ease;
}
.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease,opacity 0.15s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}
.container.active .forms{
    height: 600px;
}
.container .form.title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}
.form .title ::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: black;
    border-radius: 25px;
}
.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}
.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid red;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}
.input-fieldinput:focus{
    border-bottom-color: aliceblueblack;
}
.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: black;
    font-size: 23px;
    transition: all 0.2s ease;
}
.input-field input:focus ~i{
    color: black;
}
.input-field i.showhidepw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}
.input-field i.icon{
    left: 0;
}
.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}
.checkbox-text .checkbox-content{
    display: flex;
    align-content: center;
}
.checkbox-content input{
    margin: 0 8px-2px 4px;
    accent-color: white;
}
.form .text{
    color: black;
    font-size: 14px;
}
.form a.text{
    color: rgb(45, 42, 42);
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}
.form.button{
    margin-top: 35px;
}
.form.button input{
    border: none;
    color: antiquewhite;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color: beige;
    cursor: pointer;
    transition: all 0.3s ease;
}
.button input:hover{
    background-color: azure;
}
.form a:hover{
    text-decoration: underline;
}
.form .button{
    margin-top: 35px;
}
.form.button input{
    border:none;
    color: black;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    background-color: beige;
    cursor: pointer;
    transition: all 0.3 ease;
}
.form .login-signup{
    margin-top: 30px;
    text-align: center;
}
    </style>
</head>
<body>
<?php
$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include file which makes the
    // Database Connection.
    include 'config.php';
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $active = true;

    $sql = "Select * from users where name='$name'";

    //result of the query
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if ($num == 0) {
        if ($exists == false) {
            $hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `name`, 
                `email`, `password`) VALUES ('$name', 
                '$email', '$hash')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    } // end if 

    if ($num > 0) {
        $exists = "Email not available";
    }

} //end if

?>

<!--Regjister form-->
<div class="form signup" onsubmit="signUpValidation()">
    <span class="title">Registration</span>
    <form name="signUpform">
        <div class="input-field">
            <input type="text" name="name" placeholder="Enter your name">
                <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-field">
            <input type="text" name="email" placeholder="Enter your email">
            <i class="fa-solid fa-envelope" icon></i>                                
        </div>
        <div class="input-field">
            <input type="password" name="password" placeholder="create your password" class="password"> 
            <i class="fa-solid fa-lock icon"></i>
            <i class="fa-solid fa-eye-slash showhidepw"></i>
        </div>
        <div class="input-field">
            <input type="password" name="confirmpwd" class="password" placeholder="Confirm password">
            <i class="fa-solid fa-lock icon"></i>
            <i class="fa-solid fa-eye-slash showhidepw"></i>

        </div>
        <div class="checkbox-text">
            <div class="checkbox-content">
                <input type="checkbox" id="termCon">
                <label for="termCon" class="text">I accept all terms and conditions</label>
            </div>
        </div>
        <div class="input-field button">
            <input type="submit" value="signup">

        </div>
      </form>
    <div class="login-signup">
        <span class="text">Alredy a member?
            <a href="login.php" class="text login-link">Login Now</a>
        </span>
    </div>
 

    
</div>

<script src="loginsignin.js"></script>

</body>
</html>