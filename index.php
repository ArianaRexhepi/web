<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="login.html">
    <link rel="stylesheet" href="signup.html">
    <link rel="stylesheet" href="contact.html">
    <link rel="stylesheet" href="https://fontawesome.com/v4/icons/">
</head>
<body>
    <header>
        <a href="#" class="logo">De<span>Luxe</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="nav">
            <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About </a></li>
            <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
            <li><a href="#review"onclick="toggleMenu();">Review</a></li>
            <li><a href="menu.html" onclick="toggleMenu();">Menu</a></li>
            <li><a href="contact.html" onclick="toggleMenu();">Contact</a></li> 
            <li><a href="login.html" onclick="toggleMenu();">Log in</a></li> 
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>Always Choose Good</h2>
            <p>Food comes first, a slim waist comes second</p>
            <a href="menu.html" class="om">Our Menu</a>
        </div>
    </section >
    <section class="about" id="about">
    <div class="row">
       <div class="col50">
        <h2 class="titleText">About us</h2><br>
        <p>Conscious of our lack of connectivity, we wish to humbly take on the great challenge of discovering and, in some cases, rediscovering this beautiful country, replete with unique ingredients, landscapes, cultures, traditions, and history. <br><br> 
            Above all we wish to connect with the individuals who live here and convey their stories.
            Our collaborative team works hard to create links between humans, nature and culture, and strives to highlight those elusive elements that few people see in their daily lives.<br><br>
            The expedition we undertake has no destination or end, rather, it centers on constant movement, observation and respect for the temporality and the seasonality dictated by Earth.</p> 
       </div>
       <div class="col50">
        <div class="imgX">
            <img src="s.jpg" alt="img"/>
        </div>
        
    </div>
    </div>
    </section>

    <section class="expert" id="expert">
        <div class="title">
            <h2 class="titleText">Our Kitchen Expert</h2><br>
            <p>The best chefs from all around the world</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgX">
                    <img src="italianch.jpg">
                </div>
                <div class="text"> 
                    <h3><b>Massimo Bottura</b></h3>
                    <p>Italian Chef</p>
                </div>
            </div>
                <div class="box">
                    <div class="imgX">
                        <img src="Narisawa-Yoshihiro.jpg">
                    </div>
                    <div class="text"> 
                        <h3><b>Narisawa-Yoshihiro</b></h3>
                        <p>Japanese Chef</p>
                    </div>
                </div>
                    <div class="box">
                        <div class="imgX">
                            <img src="Anne-SophiePic.jpg">
                        </div>
                        <div class="text"> 
                            <h3><b>Anne-Sophie</b></h3>
                            <p>French Chef</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgX">
                            <img src="ba.jpg">
                        </div>
                        <div class="text"> 
                            <h3><b>Dee Davies</b></h3>
                            <p>Greek Mixologist</p>
                        </div>
                    </div>
         <section class="review" id="review">
           <div class="title white">
            <h2 class="titleText">Reviews</h2><br>
             <p>Wonderful words from our lovely costumers</p>
             </div>
            <div class="content">
                <div class="box">
                    <div class="imgX">
                        <img src="og.jpg">
                    </div>
                    <div class="text">
                        <p>"We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. 
                            Love this place and will continue to visit."</p><br>
                            <h3>Oliver Giroud</h3>
                    </div>
                 </div>
                 <div class="box">
                    <div class="imgX">
                        <img src="do.jpg">
                    </div>
                    <div class="text">
                    <p>"This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. 
                        I recommend to everyone! I would like to come back here again and again."</p><br>
                        <h3>Demet Ozdemir </h3>
                    </div>
                </div>
                    <div class="box">
                        <div class="imgX">
                            <img src="jb.jpg">
                        </div>
                        <div class="text">
                        <p>"Do yourself a favor and visit this lovely restaurant. The service is unmatched. The staff truly cares about your experience. 
                            The food is absolutely amazing everything we tasted melted in other mouths.
                             Absolutely the best meal we had while in Kosovo. Highly recommend! "</p><br>
                             <h3>J Balvin</h3>
                        </div>
                    </div>
            </div>
    </section>
        <div class="copyrightText">
                <h3 style="text-align:center;">Copyright 2022 -<a href="#"><b>All Rights Reserved</b></a></h3>
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
