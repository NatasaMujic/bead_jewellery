<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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
        body{
            font-family: 'Advent Pro', sans-serif;
            background-color: white;
            padding-top: 7%;
        }
        .form-signup{
            margin: 0 auto;
            max-width: 400px;
            background-color: #f4f3f1;
            padding: 40px;
            border: 2px solid lightgray;
            box-shadow: 10px 10px lightgray;
        }
        .logo img{
            width: 110px;
            height: 80px;
        }
        .register{
            background-color: #c89a52;
            color: white;
            padding: 7px;
            text-decoration: none;
            border:0;
            border-radius: 5px;
            margin-top: 10px;
        }
        .register:hover{
            color: #c89a52;
            background-color: white;
        }

    </style>
</head>
<body>
<div class="container">

    <form class="form-signup text-center"  id="login-form" method="post" action="#">
        <div class="logo">
            <img src="index-images/logo.png">
        </div>
        <h2>LOG IN</h2>

        <div class="form-group">
            <p id="check-email"></p>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>

        <div class="form-group">
            <p id="check-password"></p>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <input type="submit" class="btn btn-warning btn-block" id="login" name="login" value="Submit">
        <hr>
        <a href="#">Forgot your password?</a>
        <div class="row" style="margin-top: 20px;">
            <p>Don't have an register account yet?</p>
            <a href="register.php"><input type="button" name="register" class="register" value="Register"></a>
        </div>

</div>
</form>
</div>
<script>
    /* login form validation */

    var submit=document.getElementById("login");
    var email=document.getElementById("email");
    var password=document.getElementById("password");
    var check_email=document.getElementById("check-email");
    var check_password=document.getElementById("check-password");
    submit.addEventListener('click',function(event){
        event.preventDefault();

        if(email.value==="" && password.value===""){
            check_email.textContent="Email field is empty";
            check_password.textContent="Password field is empty";
            email.style.borderColor="red";
            password.style.borderColor="red";
            check_email.style.color="red";
            check_password.style.color="red";
        }

        if(email.value===""){
            check_email.textContent="Email field is empty";
            email.style.borderColor="red";
            check_email.style.color="red";

        }else if(password.value==="" || !validatePassword(password.value)){
            check_password.textContent="Password is incorrect";
            password.style.borderColor="red";
            check_password.style.color="red";
        }else if(!validateEmail(email.value)) {
            check_email.textContent = "Email is incorrect!";
            email.style.borderColor = "red";
            check_email.style.color = "red";

        }else{
            check_email.textContent="";
            check_password.textContent="";
        }

        if(email.value!==""){
            check_email.textContent="";
            email.style.borderColor = "";
        }else if(password.value!==""){
            check_password.textContent="";
            password.style.borderColor = "";
        }

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function validatePassword(password) {
            const minLength = 8;
            const hasUppercase = /[A-Z]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            const hasSpecialChar = /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password);

            return (
                password.length >= minLength &&
                hasUppercase &&
                hasLowercase &&
                hasNumber &&
                hasSpecialChar
            );
        }
    });





</script>

</body>
</html>