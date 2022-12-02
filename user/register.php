<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,700|Paytone+One|Teko:300,400,500,600,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        body {
            background-color: #fff;
            font-family: "Paytone One", sans-serif;
            overflow-x: hidden;
        }

        article,
        aside,
        details,
        figure,
        footer,
        header,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a {
            -ms-word-wrap: break-word;
            word-wrap: break-word;
            text-decoration: none;
        }

        img {
            border: none;
        }

        *:focus {
            outline: none;
        }

        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        .bg-illustration {
            position: relative;
            height: 100vh;
            width: 1194px;
            background: url("/offer.png") no-repeat center center scroll;
            background-size: cover;
            float: left;
            -webkit-animation: bgslide 2.3s forwards;
            animation: bgslide 2.3s forwards;
        }

        .bg-illustration img {
            width: 248px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            height: auto;
            margin: 19px 0 0 25px;
        }

        @-webkit-keyframes bgslide {
            from {
                left: -100%;
                width: 0;
                opacity: 0;
            }

            to {
                left: 0;
                width: 1194px;
                opacity: 1;
            }
        }

        @keyframes bgslide {
            from {
                left: -100%;
                width: 0;
                opacity: 0;
            }

            to {
                left: 0;
                width: 1194px;
                opacity: 1;
            }
        }


        .login {
            max-height: 100vh;
            overflow-Y: auto;
            float: left;
            margin: 0 auto;
            width: calc(100% - 1194px);
        }

        .login .container {
            width: 505px;
            margin: 0 auto;
            position: relative;
        }

        .login .container h1 {
            margin-top: 30px;
            font-size: 35px;
            font-weight: bolder;
        }

        .login .container .login-form {
            margin-top: 50px;
        }

        .login .container .login-form .form {
            display: -ms-grid;
            display: grid;
        }

        .login .container .login-form .form input {
            font-size: 16px;
            font-weight: normal;
            background: rgba(57, 57, 57, 0.07);
            margin: 12.5px 0;
            height: 68px;
            border: none;
            padding: 0 30px;
            border-radius: 10px;
        }

        .login .container .login-form .form button[type=submit] {
            background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
            background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
            background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
            border: none;
            margin-bottom: 20px;
            width: 241px;
            height: 58px;
            text-transform: uppercase;
            color: white;
            border-radius: 10px;
            position: relative;
            z-index: 2;
            font-weight: bold;
            font-size: 20px;
        }

        .login .container .login-form .form button[type=submit]:hover::after {
            opacity: 1;
        }

        .login .container .login-form .form button[type=submit]::after {
            content: "";
            position: absolute;
            z-index: -1;
            border-radius: 10px;
            opacity: 0;
            top: 0;
            left: 0;
            -webkit-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
            right: 0;
            bottom: 0;
            background: -webkit-linear-gradient(bottom, #09203f 0%, #537895 100%);
            background: -o-linear-gradient(bottom, #09203f 0%, #537895 100%);
            background: linear-gradient(to top, #09203f 0%, #537895 100%);
        }

        .login .container .remember-form {
            position: relative;
            margin-top: -30px;
        }

        .login .container .remember-form input[type=checkbox] {
            margin-top: 9px;
        }

        .login .container .remember-form span {
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            top: 32px;
            color: #3B3B3B;
            margin-left: 15px;
        }

        .login .container .forget-pass {
            position: absolute;
            right: 0;
            margin-top: 189px;
        }

        .login .container .forget-pass a {
            font-size: 16px;
            position: relative;
            font-weight: normal;
            color: #918F8F;
        }

        .login .container .forget-pass a::after {
            content: "";
            position: absolute;
            height: 2px;
            width: 100%;
            border-radius: 100px;
            background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
            background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
            background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
            bottom: -4px;
            left: 0;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            opacity: 0;
            right: 0;
        }

        .login .container .forget-pass a:hover::after {
            opacity: 1;
        }

        @media only screen and (min-width: 1024px) and (max-width: 1680px) {
            .bg-illustration {
                width: 50%;
                -webkit-animation: none;
                animation: none;
            }

            .login {
                width: 50%;
            }
        }

        /* Display 12", iPad PRO Portrait, iPad landscape */
        @media only screen and (max-width: 1024px) {
            body {
                overflow-x: hidden;
            }

            @-webkit-keyframes slideIn {
                from {
                    left: -100%;
                    opacity: 0;
                }

                to {
                    left: 0;
                    opacity: 1;
                }
            }

            @keyframes slideIn {
                from {
                    left: -100%;
                    opacity: 0;
                }

                to {
                    left: 0;
                    opacity: 1;
                }
            }

            .bg-illustration {
                float: none;
                background: url("/img/banner/offer.png") center center;
                background-size: cover;
                -webkit-animation: slideIn 0.8s ease-in-out forwards;
                animation: slideIn 0.8s ease-in-out forwards;
                width: 100%;
                height: 190px;
                text-align: center;
            }

            .bg-illustration img {
                width: 100px;
                height: auto;
                margin: 20px auto !important;
                text-align: center;
            }

            .bg-illustration .burger-btn {
                left: 33px;
                top: 29px;
                display: block;
                position: absolute;
            }

            .bg-illustration .burger-btn span {
                display: block;
                height: 4px;
                margin: 6px;
                background-color: #fff;
            }

            .bg-illustration .burger-btn span:nth-child(1) {
                width: 37px;
            }

            .bg-illustration .burger-btn span:nth-child(2) {
                width: 28px;
            }

            .bg-illustration .burger-btn span:nth-child(3) {
                width: 20px;
            }

            .login {
                float: none;
                margin: 0 auto;
                width: 100%;
            }

            .login .container {
                -webkit-animation: slideIn 0.8s ease-in-out forwards;
                animation: slideIn 0.8s ease-in-out forwards;
                width: 85%;
                float: none;
            }

            .login .container h1 {
                font-size: 25px;
                margin-top: 10px;
            }

            .login .container .login-form {
                margin-top: 90px;
            }

            .login .container .login-form .form input {
                height: 45px;
            }

            .login .container .login-form .form button[type=submit] {
                height: 45px;
                margin-top: 100px;
            }

            .login .container .login-form .remember-form {
                position: relative;
                margin-top: -14px;
            }

            .login .container .login-form .remember-form span {
                font-size: 16px;
                margin-top: 22px;
                top: inherit;
            }

            .forget-pass {
                position: absolute;
                right: inherit;
                left: 0;
                bottom: -40px;
                margin: 0 !important;
            }

            .forget-pass a {
                font-size: 16px;
                position: relative;
                font-weight: normal;
                color: #918F8F;
            }

            .forget-pass a::after {
                content: "";
                position: absolute;
                height: 2px;
                width: 100%;
                border-radius: 100px;
                background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
                background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
                background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
                bottom: -4px;
                left: 0;
                -webkit-transition: 0.3s;
                -o-transition: 0.3s;
                transition: 0.3s;
                opacity: 0;
                right: 0;
            }

            .forget-pass a:hover::after {
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <div class="parent clearfix">


        <div class="login">
            <div class="container">
                <h1>Register to<br />new account</h1>
                <div class="login-form">
                    <div action="login.php" method="POST" class="form">
                        <input type="text" placeholder="Name" id="username" name="username" required>
                        <input type="text" placeholder="LoginID" id="loginid" name="loginid" required>
                        <input type="password" placeholder="Password" id="password" name="password" required>
                        <input type="password" placeholder="Confirm Password" id="conf-password" name="conf-password" required>


                        <div class="box_input--sex" id="sex" style="display: flex; align-items:center; gap: 10px">
                            <label for="sex">Female</label>
                            <input type="radio" value="female" name="sex" checked>
                            <label for="sex">Male</label>
                            <input type="radio" value="male" name="sex">
                        </div>


                        <button id="submit" name="submit" type="submit">SIGN-IN</button>
                    </div>
                </div>
                <div class="result"></div>
            </div>
        </div>

        <div class="bg-illustration">
            <img src="/img/dotchuoi2.png" alt="logo">
            <div class="burger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <script>
        $('#submit').click(function() {
            var name = $('#username').val();
            var loginID = $('#loginid').val();
            var password = $('#password').val();
            var Conf_password = $('#conf-password').val();
            var sex = $('input[name="sex"]:checked').val();

            if (validate(password, Conf_password)) {
                console.log(name, loginID, password, Conf_password, sex);

                $.ajax({
                    type: "POST",
                    url: "login-Controller.php",
                    data: {
                        name: name,
                        loginID: loginID,
                        password: password,
                        sex: sex,
                    },
                    error: function(response) {
                        console.log(response);
                        console.log("fail");
                        $('.result').html('error')
                    },
                    success: function(response) {
                        console.log(response);
                        console.log("success");
                        $('.result').html('Đăng ký thành công')
                    },
                });
            }else (
                $('.result').html('mat khau chua trung khop')
            )


        })

        function validate(password, cPasword) {
            if (password == cPasword) return true;
            return false;
        }
    </script>
</body>

</html>