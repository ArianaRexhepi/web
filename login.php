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
    background-color: rgb(125, 5, 5);
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
    <div class ="container">
        <div class ="forms">
            <div class ="form login">
                <span class="title">Login</span>

                
                    <form action="" name="loginForm" onsubmit="loginvalidation()">
                        <div class="input-field">
                            <input type="" name="email" placeholder="Enter your email">
                            <i class="fa-solid fa-envelope icon"></i>
                        </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fa-solid fa-lock icon"></i>   
                        <i class="fa-solid fa-eye-slash showhidepw"></i>
                    </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content"> 
                                <input type="checkbox" id="logcheck">
                                <label for="logcheck" class="text">Remember me</label>
                            </div>
                            <a href="#" class="text">Forgot password?</a>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Login">
                         </div>
                        
                     </form>
                    
                     <div class="login-signup">
                        <span class="text">Not a member</span>
                        <a href="signup.html" class="text-signup-link">Sign up</a>
                     </div>
                    </div>
                 
                    
        </div>
    </div>

    <!--javascript-->
    <script src="loginn.js"></script>
</body>
</html>