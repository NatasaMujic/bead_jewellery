<?php
 include('db_config.php');
?>
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
            max-width: 600px;
            background-color: #f4f3f1;
            padding: 40px;
            border: 2px solid lightgray;
            box-shadow: 10px 10px lightgray;
        }
        .logo img{
            width: 110px;
            height: 80px;
        }
        .btn{
            background-color: rgb(128, 0, 128);
            padding: 8px;
            font-size: 17px;
            color: white;
        }
        .btn:hover{
            background-color: white;
            color:  rgb(128, 0, 128);
        }
        #log{
            background-color: #c89a52;
            color: white;
            padding: 8px;
            font-size: 17px;
            border-radius: 5px;
            text-decoration: none;
        }
        #log:hover{
            background-color: white;
            color:  #c89a52;
        }

    </style>
</head>
<body>
<div class="container">
    <form class="form-signup" id="registerForm" method="post" action="register-info-database.php">
        <div class="logo text-center">
            <img src="index-images/logo.png">
        </div>
        <h2 class="text-center">Register form</h2>
        <p class="text-center">Create your free account</p>

        <div class="row">
            <div class="col">
                <p id="check-fname" class="error-message"></p>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <p id="check-lname"  class="error-message"></p>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p id="check-email" class="error-message"></p>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
            </div>
            <div class="col">
                <p id="check-phone-num"  class="error-message"></p>
                <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p id="check-state" class="error-message"></p>
                <input type="text" name="state" id="state" class="form-control" placeholder="State">
            </div>
            <div class="col">
                <p id="check-city" class="error-message"></p>
                <input type="text" name="city" id="city" class="form-control" placeholder="City">
            </div>
            <div class="col">
                <p id="check-address" class="error-message"></p>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p id="check-street-num" class="error-message"></p>
                <input type="text" name="street_num" id="street_num" class="form-control" placeholder="Street number">
            </div>
            <div class="col">
                <p id="check-zip" class="error-message"></p>
                <input type="text" name="zip" id="zip" class="form-control" placeholder="ZIP">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p id="check-password" class="error-message"></p>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="col">
                <p id="check-conf-password" class="error-message"></p>
                <input type="password" name="conf_password" id="conf_password" class="form-control" placeholder="Confirm password">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p id="check-day-birth" class="error-message"></p>
                <label>Date of Birth</label>
                <input type="date" name="day_of_birth" id="day_of_birth" class="form-control" placeholder="Day of birth">
            </div>

        </div>
        <div class="form-check">
            <p id="check_checkbox_terms_of_use" class="error-message"></p>
            <input class="form-check-input" name="checkbox_terms_of_use" id="checkbox_terms_of_use" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                I agree to the <a href="#" style="text-decoration: none;">terms of use</a>
            </label>
        </div>
        <br>
        <input type="submit" id="reg-submit" class="btn btn-block" name="btn" value="Submit">
        <hr>
        <p>Already have an account?</p>
        <a href="login.php" id="log">Log in</a>
    </form>
</div>



<script>
    /* register form validation */

    var mainForm = document.getElementById("registerForm");
    var reg_submit = document.getElementById("reg-submit");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var phone_number = document.getElementById("phone_number");
    var state = document.getElementById("state");
    var city = document.getElementById("city");
    var address = document.getElementById("address");
    var street_num = document.getElementById("street_num");
    var zip = document.getElementById("zip");
    var password = document.getElementById("password");
    var conf_password = document.getElementById("conf_password");
    var day_of_birth = document.getElementById("day_of_birth");
    var checkbox_terms_of_use = document.getElementById("checkbox_terms_of_use");

    var check_fname = document.getElementById("check-fname");
    var check_lname = document.getElementById("check-lname");
    var check_email = document.getElementById("check-email");
    var check_phone_num = document.getElementById("check-phone-num");
    var check_state = document.getElementById("check-state");
    var check_city = document.getElementById("check-city");
    var check_address = document.getElementById("check-address");
    var check_street_num = document.getElementById("check-street-num");
    var check_zip = document.getElementById("check-zip");
    var check_password = document.getElementById("check-password");
    var check_conf_passw = document.getElementById("check-conf-password");
    var check_day_birth = document.getElementById("check-day-birth");
    var check_checkbox_terms_of_use = document.getElementById("check_checkbox_terms_of_use");

    reg_submit.addEventListener('click', function (event) {
        event.preventDefault();
        validateForm();
    });

    function validateForm() {
        resetErrorMessages();
        var isValid = true;

        if (isEmpty(fname)) {
            setError(fname, check_fname, "First Name input is empty!");
            isValid = false;
        }
        if (isEmpty(lname)) {
            setError(lname, check_lname, "Last Name input is empty!");
            isValid = false;
        }

        if (isEmpty(email)) {
            setError(email, check_email, "Email input is empty!");
            isValid = false;
        } else if (!validateEmail(email.value)) {
            setError(email, check_email, "Email is not valid!");
            isValid = false;
        }

        if(isEmpty(password)){
            setError(password,check_password,"Password input is empty!");
            isValid=false;
        }else if(!validatePassword(password.value)){
            setError(password,check_password,"Password is not correct");
            isValid=false;
        }

        if(isEmpty(conf_password)){
            setError(conf_password,check_conf_passw,"Confirm password input is empty!");
            isValid=false;
        }


        if(isEmpty(phone_number)){
            setError(phone_number,check_phone_num,"Phone number input is empty!");
            isValid=false;
        }

        if(isEmpty(city)) {
            setError(city, check_city, "City input is empty!");
            isValid = false;
        }

        if(isEmpty(state)){
            setError(state,check_state,"State input is empty!");
            isValid=false;
        }


        if(isEmpty(address)){
            setError(address,check_address,"Address input is empty!");
            isValid=false;
        }

        if(isEmpty(street_num)){
            setError(street_num,check_street_num,"Street number input is empty!");
            isValid=false;
        }

        if(isEmpty(zip)){
            setError(zip,check_zip,"Zip input is empty!");
            isValid=false;
        }


        if (!checkbox_terms_of_use.checked) {
            setError(checkbox_terms_of_use, check_checkbox_terms_of_use, "Check this box if you have read the terms of use!");
            isValid = false;
        }


        if (isValid) {
            mainForm.submit();
        }
    }

    function isEmpty(inputField) {
        return inputField.value.trim() === "";
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


    function setError(inputField, errorField, errorMessage) {
        inputField.style.borderColor = "red";
        errorField.textContent = errorMessage;
        errorField.style.color = "red";
    }

    function resetErrorMessages() {
        var errorFields = document.querySelectorAll(".error-message");
        for (var i = 0; i < errorFields.length; i++) {
            errorFields[i].textContent = "";
        }

        var inputFields = document.querySelectorAll(".form-control");
        for (var i = 0; i < inputFields.length; i++) {
            inputFields[i].style.borderColor = "";
        }
    }


</script>

