<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body{
    min-height: 1000px;
}
header{
     position:fixed;
     top:0;
     left:0;
     width:100%;
     padding: 40px 100px;
     z-index: 10000;
     display: flex;
     justify-content: space-between;
     align-items: center;
     text-transform: uppercase;
     transition: 0.5s;
}
header.sticky{
    background:white;
    padding:10px 100px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0,0.5);
}
header.sticky .logo{
    color:black;
}
header .logo{
    color:white;
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}
header .logo span{
   color:red;
}
header .nav{
    position:relative;
    display: flex;
}
header .nav li{
    list-style: none;
    margin-left: 30px;
}
header .nav li a{
    text-decoration:none;
    color:white;
    font-weight: 300;
}
header.sticky .nav li a{
    color:black;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.contact{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(photo1.jpg);
    background-size: cover;
}
.contact .content{
max-width: 800px;
text-align: center;
}
.contact .content h2{
    font-size: 36px;
    font-weight: 500;
    color: red;
}
.contact .content p{
font-weight: 300;
color: white;
}
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon{
    min-width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: white;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3{
    font-weight: 600;
    color: red;
}
.contactForm{
    width: 50%;
    padding: 50px;
    background: whitesmoke;
}
.contactForm h2{
    font-size: 30px;
    color: black;
    font-weight: 500;
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 3px solid black;
    outline: none;
    resize: none;
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: darkgray;
}
.contactForm .inputBox input:focus~span,
.contactForm .inputBox input:valid~span,
.contactForm .inputBox input:focus~span,
.contactForm .inputBox input:valid~span

.contactForm .inputBox input:focus ~ span{
    color: red;
    font-size: 12px;
    transform: translate(-20px);
}
.contactForm .inputBox input[type="subimit"]{
    width: 100px;
    background: #00bcd4;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}
@media (max-width:991px){
    .contact{
        padding: 50px;
    }
    .container{
        flex-direction: column;
    }
    .container .contactInfo{
        margin-bottom: 40px;
    }
    .container .contactInfo{
        width: 100%;
    }
}
.copyrightText{
    padding:8px 40px;
    border-top: 1px solid rgba(0, 0, 0, 0,0.1);
    text-align: center;
}
.copyrightText p{
    color: #333;
}
.copyrightText a{
    color: red;
    font-weight: 500;
    text-decoration: none;
}
@media(max-width:991px){
    header,
    header.sticky{
        padding:10pz 20px;
    }
 header .nav{
        display: none;
    }
header .nav.active{
    width: 100%;
    height: calc(100% - 68px);
    position: fixed;
    top: 68px;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #fff;
}
header .nav li{
    margin-left: 0;
}
header .nav li a{
    color: #111;
    font-size: 1.6em;
}
.menuToggle{
    position: relative;
    width: 40px;
    height: 40px;
    background: url(menu.png);
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
}
.menuToggle.active{
    background: url(close.png);
    background-size: 30px;
    background-repeat: no-repeat;
    background-position: center;
}
header.sticky .menuToggle{
    filter: invert(1);
}
section{
    padding: 20px;
}
.banner .content h2{
    font-size: 3em;
    color: #fff;
}
.row{
    flex-direction: column;
}
.row .col50{
    position:relative;
    width:100%;
}
.row .col50 .imgX{
    height:300px;
    margin-top: 20px;
}
.menu .content{
    margin-top: 20px;
    }
.menu .content .box{
    margin:10px;
    }
.menu .content .box .imgX{
    height: 260px;
}
.title{
    text-align: center;
}
.titleText{
    font-size: 1.8em;
    line-height: 1.5em;
    margin-bottom: 15px;
    font-weight: 300;
}
.review .content .box{
    margin: 10px;
    padding: 20px;
}
.contactForm{
padding: 35px 40px;
margin-top: 20px;
margin-bottom: 30px;
}
}
@media(max-width:480px){
.banner .content h2{
    font-size: 2.2em;
    color: #fff;
}
}
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">De<span>Luxe</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="nav">
            <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
            <li><a href="index.php" onclick="toggleMenu();">About </a></li>
            <li><a href="index.php" onclick="toggleMenu();">Expert</a></li>
            <li><a href="index.php"onclick="toggleMenu();">Review</a></li>
            <li><a href="menu.php" onclick="toggleMenu();">Menu</a></li>
            <li><a href="contact.php" onclick="toggleMenu();">Contact</a></li> 
            <li><a href="login.php" onclick="toggleMenu();">Log in</a></li> 
        </ul>
    </header>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>
                Please send us a message by completing the form below and we???ll be in touch with you as soon as possible. Thank you.
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Adress</h3>
                        <p>Rruga B, Prishtina 10000<br>Kosova</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+383 44-123-456</p>
                    </div>

                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:24px" class="fa">&#xf0e0; </i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Deluxe@gmail.com</p>
                    </div>

                </div>

            </div>

            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span> 
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                        
                    </div>
                </form>
            </div>

        </div>
    </section>
    <div class="copyrightText">
        <p>Copyright 2022 -<a href="#"><b>All Rights Reserved</b></a></p>
    </div>
</body>
</html>