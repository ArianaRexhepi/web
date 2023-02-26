<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
        <header>
            <a href="#" class="logo">De<span>Luxe</span></a>
            <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="nav">
                <li><a href="#banner">Home</a></li>
                <li><a href="#about">About </a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="#expert">Expert</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="contact.html">Contact</a></li> 
                <li><a href="#signin">Log in</a></li> 
            </ul>
        </header>
    <selection class="menu" id="menu">
    <div class="title">
        <h2 class="titleText">Our Menu</h2><br>
        <p>The best food, at the best place</p>
    </div>
    <div class="content">
        <div class="box">
            <div class="imgX">
                <img src="gs.jpg"  style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Salads</h3>
            </div>
        </div>
         <div class="box">
            <div class="imgX" >
                <img src="soup.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Soups</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="pasta.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Pastas</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="risotto.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Risotto</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="pizza.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Pizza</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="mx.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Mexican Food</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="seafood.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3> Sea Food</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="sushi.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Sushi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="rb.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Roast Beef with Side Dish</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="cake.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Dessert</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="cc.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Non-Alcoholic Drinks</h3>
            </div>
        </div>
        <div class="box">
            <div class="imgX" >
                <img src="alc.jpg" style="height: 300px; width: 300px;">
            </div>
            <div class="text">
                <h3>Alcohol</h3>
            </div>
        </div>
        <div class="title">
            <a href="#" class="om">View All</a><br>
        </div>
    </div>
    </section>
</section>
<div class="copyrightText">
    <p>Copyright 2022 -<a href="#"><b>All Rights Reserved</b></a></p>
</div>
    <script type="text/javascript">
        window.addEventListener ('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY>0);
        });
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const nav = document.querySelector('.nav');
             menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        }
        </script>
</body>
</html>