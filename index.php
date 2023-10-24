<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-commerce website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <style>
        .container-fluid{
            padding-right: 0;
            padding-left: 0;
        }
        .navbar{
            padding: 10px;
            font-family: 'Advent Pro', sans-serif;
            background-color: rgba(255, 255, 255, 0.4);
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }


        /*Set the starting positions for the title and text */
        h3 {
            position: relative;
            left: 0;
            opacity: 0;
            transition: all 0.5s ease;
        }

        p {
            position: relative;
            right: 0;
            opacity: 0;
            transition: all 0.5s ease;
        }
        .img-s{
            position: relative;
            right: 0;
            opacity: 0;
            transition: all 0.5s ease;
        }


        /* Adding animation with @keyframes */
        @keyframes slideInFromLeft {
            0% {
                left: -100px;
                opacity: 0;
            }
            100% {
                left: 0;
                opacity: 1;
            }
        }

        @keyframes slideInFromRight {
            0% {
                right: -100px;
                opacity: 0;
            }
            100% {
                right: 0;
                opacity: 1;
            }
        }

        /* Add classes that will trigger animations when scrolling to a certain position*/
        .scrolled h3 {
            animation: slideInFromLeft 2s forwards;
        }

        .scrolled p {
            animation: slideInFromRight 2s forwards;
        }
        .scrolled .img-s {
            animation: slideInFromLeft 2s forwards;
        }

        .details{
            position: relative;
        }
        .details{
            content: "cdaccccd";
            position: absolute;
            background-color: black;
            border: 0;
            color: white;
            font-family: 'Dancing Script', cursive;
            padding: 8px;
            font-size: 25px;
            top: 45%;
            left: 30%;
            right: 30%;
            bottom: 45%;
            display: none;
        }

        .wishlist-logo{
            width: 45px;
            height: 45px;
            position: absolute;
            bottom: 40%;
            top: 60%;
            left: 75%;
            right: 30%;
        }
        #register{
            font-size: 19px;
            width: 150px;
            background-color: #c89a52;
            color: white;
            border: 0;
            border-radius: 5px;
            padding: 5px;
        }
        #register:hover{
            background-color: white;
            color: #c89a52;
        }
        .rings{
            width: 600px;
            height: 400px;
            opacity: 0.3;
            z-index: 0;
            position: absolute;
            left: 30px;
        }


    </style>
</head>
<body>
<div id="header" class="container-fluid vh-100">
    <div id="navbar" class="navbar">
        <div class="logo">
            <img src="index-images/logo.png" style="height 120px; width: 120px;">
        </div>
        <ul>
            <a href="#" style="text-decoration: none; color: black;"><li>NEWS</li></a>
            <a href="#" style="text-decoration: none; color: black;"><li>NECKLACES</li></a>
            <a href="#" style="text-decoration: none; color: black;"><li>BRACELETS</li></a>
            <a href="#" style="text-decoration: none; color: black;"><li>EARRINGS</li></a>
            <a href="#" style="text-decoration: none; color: black;"><li>CONTACT US</li></a>
        </ul>
        <a href="#"><img src="index-images/facebook.png" style="height: 30px; width: 30px;"></a>
        <a href="#"><img src="index-images/insta.png" style="height: 30px; width: 30px;"></a>
        <a href="#"><img src="index-images/youtube.png" style="height: 30px; width: 30px;"></a>
        <a href="login.php" style="text-decoration: none; color: black;"><li>LOG IN</li></a>
        <a href="register.php" style="text-decoration: none; color: black;"><li>REGISTER</li></a>

    </div>

</div>

<div id="main" class="container-fluid vh-100">
    <div class="col-md-10 position-absolute bottom-20 start-50 translate-middle-x">
        <br><br>
        <h3 style="font-family: 'Dancing Script', cursive;"><b>We enjoy what we do...</b></h3>
        <br><br>
    <p>Handmade jewelry from beads is our pleasure, but it gives us even greater pleasure when we meet the
        expectations of our customers.</p>
        <p>It all started as a hobby, and now it has turned into a family business.
            My mother and I make jewelry, she is a jeweler by profession and she passed that love for jewelry on to me.</p>
        <p>We make jewelry from Czech beads in combination with miyuki Chinese beads. We also make jewelry to order.</p>
        <p>If you have any questions feel free to <a href="#" style="text-decoration: none; ">contact us</a>! We will be pleased to hear your opinion, suggestions or orders!</p>

        <br><br><br>
        <div class="container-fluid">
            <div class="boxes">

                <div class="box1 col-md-2 text-center">
        <div class="img-s">
            <a href="#" style="color: black;">
            <h2 class="txt">Combination</h2>
            <img src="index-images/combination.png" style="width: 100px; height: 100px;">
            </a>
        </div>
        </div>

        <div class="box2 col-md-2 text-center">
            <div class="img-s">
                <a href="#" style="color: black;">
                <h2 class="txt">Necklaces</h2>
                <img src="index-images/white-necklace.png" style="width: 100px; height: 100px;">
                </a>
            </div>
        </div>

        <div class="box3 col-md-2 text-center">
            <div class="img-s">
                <a href="#" style="color: black;">
                <h2 class="txt">Earrings</h2>
                <img src="index-images/blue-earring.png" style="width: 100px; height: 100px;">
                </a>
            </div>
        </div>

        <div class="box4 col-md-2 text-center">
            <div class="img-s">
                <a href="#" style="color: black;">
                <h2 class="txt">Bracelets</h2>
                <img src="index-images/silver-bracelet.png" style="width: 100px; height: 100px;">
                </a>
            </div>
        </div>

                <div class="box4 col-md-2 text-center">
                    <div class="img-s">
                        <a href="#" style="color: black;">
                            <h2 class="txt">Make to order</h2>
                            <img src="index-images/tool.png" style="width: 100px; height: 100px;">
                        </a>
                    </div>
                </div>
        </div>


        </div>
    </div>
</div>

<div id="main2" class="container d-flex justify-content-center">
    <div class="box d-flex">
    <div class="col-md-5">
        <br><br><br>
        <img src="index-images/j_rings.png" class="rings">
                <h1 class="t"><b>Handmade products of high quality and affordable prices</b></h1>
                <p class="t1" style="opacity:  100%;     font-family: 'Advent Pro', sans-serif; font-weight: bold;">Handwork has always been valued more than factory work, and that's
                    why these products are worthy of attention.However, the prices of these products are affordable for everyone!</p>
                <br>
    </div>
        <p>asdadadasdasdasda</p>
    <div class="col-md-5">
    <img src="index-images/neckl.jpg" alt="image" style="width: 300px; height: 330px;">

    </div>
    </div>
</div>


<div id="main3" class="container-fluid">
    <div class="main3">
    <img src="index-images/quotation.png" style="width: 120px; height: 120px;">
    <h3 class="quote" style="opacity: 100%; ">“Jewelry is like the perfect spice -- it complements what’s already there.”</h3>
        <h5 class="quoteAuthor">-Diane Von Furstenberg
            (fashion designer)</h5>
    </div>
</div>



<div class="container-fluid d-flex justify-content-around" style="margin-top: 50px;">
    <div class="col-md-3 text-center">
        <div class="main4-1">
        <br><br><br>
        <div class="thumbnail">
            <img src="index-images/white-necklace.jpg" alt="image" style="width:100%;">
            <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

            <input type="button" name="details" class="details" value="More detail">
            <div class="caption">
                <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">White queen</h4>
                <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">White pearls necklace with blue crystals</p>
                <div class="detail">
                    <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">20,00 EU</h3>
                    <div class="detail1">
                        <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                        <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <div class="col-md-3 text-center">
        <div class="main4-1">
            <br><br><br>
            <div class="thumbnail">
                <img src="index-images/purple-c.jpg" alt="image" style="width:100%;">
                <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

                <input type="button" name="details" class="details" value="More detail">
                <div class="caption">
                    <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">Crystal princess</h4>
                    <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">Golden beaded necklace with purple crystals</p>
                    <div class="detail">
                        <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">30,00 EU</h3>
                        <div class="detail1">
                            <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                            <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-3 text-center">
        <div class="main4-1">
            <br><br><br>
            <div class="thumbnail">
                <img src="index-images/white-pendant_n.jpg" alt="image" style="width:100%;">
                <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

                <input type="button" name="details" class="details" value="More detail">
                <div class="caption">
                    <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">White queen</h4>
                    <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">White pearls necklace with blue crystals</p>
                    <div class="detail">
                        <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">20,00 EU</h3>
                        <div class="detail1">
                            <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                            <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid d-flex justify-content-around">
    <div class="col-md-3 text-center">
        <div class="main4-1">
            <br><br><br>
            <div class="thumbnail">
                <img src="index-images/second.jpg" alt="image" style="width:100%;">
                <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

                <input type="button" name="details" class="details" value="More detail">
                <div class="caption">
                    <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">Crystal flower necklace</h4>
                    <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">White pearls necklace with blue crystals</p>
                    <div class="detail">
                        <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">20,00 EU</h3>
                        <div class="detail1">
                            <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                            <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="col-md-3 text-center">
        <div class="main4-1">
            <br><br><br>
            <div class="thumbnail">
                <img src="index-images/black-w.jpg" alt="image" style="width:100%;">
                <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

                <input type="button" name="details" class="details" value="More detail">
                <div class="caption">
                    <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">White queen</h4>
                    <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">White pearls necklace with blue crystals</p>
                    <div class="detail">
                        <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">20,00 EU</h3>
                        <div class="detail1">
                            <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                            <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-3 text-center">
        <div class="main4-1">
            <br><br><br>
            <div class="thumbnail">
                <img src="index-images/white-pendant_n.jpg" alt="image" style="width:100%;">
                <a href="#" class="wishlist-logo"><img src="index-images/wishlist.png" alt="image" class="wishlist-logo"></a>

                <input type="button" name="details" class="details" value="More detail">
                <div class="caption">
                    <h4 style="font-family: 'Dancing Script', cursive; color: #c89a52;">White queen</h4>
                    <p style="opacity: 1; font-family: 'Advent Pro', sans-serif;">White pearls necklace with blue crystals</p>
                    <div class="detail">
                        <h3 style="opacity: 1; font-family: 'Advent Pro', sans-serif;">20,00 EU</h3>
                        <div class="detail1">
                            <input type="number" name="num" class="num" style="width: 70px;" value="0" minlength="0">
                            <a href="#" style="background-color: #c89a52; padding: 5px;" class="btn"><input type="button" name="btn" class="btn" value="ADD TO BAG" style="font-family: 'Advent Pro', sans-serif; color: white; border: 0px;"><img src="index-images/cart.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="container d-flex justify-content-center">
    <div class="main5 col-md-9">
        <b><h1 style="font-family: 'Dancing Script', cursive;">Not registered yet?</h1></b>
        <div class="d-flex">
            <br>
        <h5 style="font-family: 'Advent Pro', sans-serif;">You do not need to be registered to shop on our site, however if you want to create your Wish Lists you must be registered.
            Registration also allows you to order goods more easily and quickly - you don't have to fill in forms every time with the
            necessary data for the delivery of goods. When you visit our pages again, it is enough to log in by clicking on the "Log in"
            field in the upper right corner. All registered users must be logged into their account before purchasing.
            Registered customers generally have more benefits than non-registered customers (e.g. faster and easier ordering,
            saving of favorite products, discount notifications, etc.)</h5>
        <img src="index-images/women-red.jpg" style="width: 400px; height: 410px;">
    </div>
        <a href="register.php"><input type="button" name="register" id="register" value="Register" style="font-family: 'Dancing Script', cursive; font-size: 25px;"></a>

    </div>
</div>

<!--pop up menu - modal-->
<div id="modal">
    <div class="modal-header">
        <h2>Are you logged in?</h2>
        <button class="button-close" id="btn-close">&times;</button>
    </div>
    <div class="modal-body">
        <h6>If you are already a registered user, log in to your account:</h6>
        <a href="login.php"><input type="button" name="login" id="login" value="Log in"></a>
        <br><br>
        <h6>If you are not a registered user, create an account:</h6>
        <a href="register.php"><input type="button" name="reg" id="reg" value="Register"></a>
    </div>
</div>

<div id="overlay"></div>
    <!--end of pop up menu-->


<div class="container-fluid">
    <div class="footer d-flex justify-content-between">
        <div class="basic">
        <img src="index-images/logo.png" style="height 180px; width: 150px;">
            <br><br>
            <p class="basic-info">+381/616644258</p>
            <p class="basic-info">24000 Subotica Serbia</p>
            <p class="basic-info">mujicnatasa99@gmail.com</p>
        </div>

        <div class="information">
            <h4 class="info">INFORMATION</h4>
            <p class="info">About us</p>
            <p class="info">Notifications</p>
            <p class="info">Contact us</p>

        </div>
        <div class="service">
            <h4 class="cus-service">CUSTOMER SERVICE</h4>
            <p class="cus-service">Terms of use</p>
            <p class="cus-service">Terms of sale</p>
            <p class="cus-service">Privacy policy</p>
            <p class="cus-service">Delivery</p>
            <p class="cus-service">Right of withdrawal and return of goods</p>
            <p class="cus-service">Product replacement</p>
            <p class="cus-service">Reclamations</p>
        </div>

        <div class="newsletter">
            <h4 class="news">NEWSLETTER</h4>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-light" style="font-family: 'Advent Pro', sans-serif;">SEND</button>

                    </div>

                </div>
            </form>
            <br><br><br>
            <h4 class="news">FOLLOW US</h4>
            <div class="row">
                <div class="col">
                    <a href="#"><img src="index-images/facebook.png" style="height: 30px; width: 30px;"></a>
                </div>
                <div class="col">
                    <a href="#"><img src="index-images/insta.png" style="height: 30px; width: 30px;"></a>
                </div>
                <div class="col">
                    <a href="#"><img src="index-images/youtube.png" style="height: 30px; width: 30px;"></a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    //Track the scrolling and add the scrolled class when it scrolls to a certain position
    window.addEventListener("scroll", function () {
        var main = document.getElementById("main");
        var rect = main.getBoundingClientRect();
        var threshold = window.innerHeight / 2; //Scroll Threshold (can be customized)

        if (rect.top <= threshold) {
            main.classList.add("scrolled");
        } else {
            main.classList.remove("scrolled");
        }
    });

//display "More detail" on each button by hovering each product box
    var main4 = document.querySelectorAll(".main4-1");

    main4.forEach(function (element) {
        element.addEventListener('mouseover', function () {
            var details = element.querySelector(".details");
            details.style.display = 'block';
        });

        element.addEventListener('mouseout', function () {
            var details = element.querySelector(".details");
            details.style.display = 'none';
        });
    });


    /*script for showing pop up menu*/
    var btn = document.querySelectorAll(".btn");
    var wishlist = document.querySelectorAll(".wishlist-logo");
    var modal = document.getElementById("modal");
    var overlay = document.getElementById("overlay");
    var btnClose = document.getElementById("btn-close");

    btn.forEach(function (bag) {
        bag.addEventListener('click', function (event) {
            event.preventDefault(); // Zaustavljamo podrazumevano ponašanje linka
            modal.style.display = 'block';
            overlay.style.display = 'block';
            document.body.classList.add("modal-open"); // Dodajemo klasu za onemogućavanje skrolovanja
        });
    });

    wishlist.forEach(function (wishl) {
        wishl.addEventListener('click', function (event) {
            event.preventDefault();
            modal.style.display = 'block';
            overlay.style.display = 'block';
            document.body.classList.add("modal-open");
        });
    });

    btnClose.addEventListener('click', function () {
        modal.style.display = 'none';
        overlay.style.display = 'none';
        document.body.classList.remove("modal-open"); // Uklanjamo klasu za dozvoljavanje skrolovanja
    });

</script>
</body>
</html>


<?php
