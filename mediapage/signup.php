<?php

    chdir("backend");
    require("./setup.php");

    $signupError = null;

    if(isset($_POST['emailaddr'], $_POST['password'], $_POST['password2'])){

        $email = $_POST['emailaddr'];
        
        if($_POST['password'] !== $_POST['password2']){
            $signupError = "Password don't match";
        } else if(strlen($_POST['password']) < 10){
            $signupError = "Password too short";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $signupError = "Invalid email address";
        } else {

            $safeEmail = escapeSql($email);
            $result = query("select `id` from user_accounts where email_address = '$safeEmail'");

            $numberMatched = mysqli_num_rows($result);

            if($numberMatched > 0){
                $signupError = "Email address taken";
            }
        }

        if($signupError == null){
            
            $safeEmail = escapeSql($email);
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $hash = escapeSql($hash);
            $time = time();

            query("insert into user_accounts ( email_address, password_hash, signup_time, screen_name ) values ( '$safeEmail', '$hash', '$time', '' )");

            header("Location: welcome.php");
            die();
        }
    }
?>

<html>

    <head>
        <title>Sign Up</title>
    </head>

    <style>
        * {
          box-sizing: border-box;
        }

        body {
          font-family: "Poppins-Regular";
          color: #333;
          font-size: 13px;
          margin: 0;
        }

        input,
        textarea,
        select,
        button {
          font-family: "Poppins-Regular";
          color: #333;
          font-size: 13px;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul {
          margin: 0;
        }

        a:hover {
          text-decoration: none;
        }

        .wrapper {
          min-height: 100vh;
          background-size: cover;
          background-repeat: no-repeat;
          display: flex;
          align-items: center;
        }

        .inner {
          padding: 20px;
          background: rgba(255, 255, 255, 0.26);
          margin: 0 auto;
        }

        .inner .image-holder {
          width: 50%;
        }

        .inner form {
          width: 360px;
          margin: 0 auto;
        }

        .inner h3 {
          text-transform: uppercase;
          font-size: 25px;
          font-family: "Poppins-SemiBold";
          text-align: center;
          margin-bottom: 28px;
        }

        .form-group {
          display: flex;
        }

        .form-group input {
          width: 50%;
        }

        .form-group input:first-child {
          margin-right: 25px;
        }

        .form-wrapper {
          position: relative;
        }

        .form-wrapper i {
          position: absolute;
          bottom: 9px;
          right: 0;
        }

        .form-control {
          display: block;
          width: 100%;
          height: 30px;
          padding-left: 10px;
          margin-bottom: 25px;
          transition: 0.5s;
        }

        .form-control:hover {
            border-radius: 20px;
            border: 2px solid #fa8500;
        }

        .form-control::-webkit-input-placeholder {
          font-size: 13px;
          color: #333;
          font-family: "Poppins-Regular";
        }

        .form-control::-moz-placeholder {
          font-size: 13px;
          color: #333;
          font-family: "Poppins-Regular";
        }

        .form-control:-ms-input-placeholder {
          font-size: 13px;
          color: #333;
          font-family: "Poppins-Regular";
        }

        .form-control:-moz-placeholder {
          font-size: 13px;
          color: #333;
          font-family: "Poppins-Regular";
        }

        button {
          border: none;
          width: 164px;
          height: 51px;
          margin: auto;
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 0;
          background: #333;
          font-size: 15px;
          color: #fff;
          vertical-align: middle;
        }

        button i {
          margin-left: 10px;
          transform: translateZ(0);
        }

        @media (max-width: 1199px) {
          .wrapper {
            background-position: right center;
          }
        }

        @media (max-width: 991px) {
          .inner form {
            padding-top: 10px;
          }
        }

        @media (max-width: 767px) {
          .inner {
            display: block;
          }
          .inner .image-holder {
            width: 100%;
          }
          .inner form {
            padding: 40px 0 30px;
          }
        }
    </style>

    <body>
        
        <div class="wrapper" style="background-color: #202020;">
            <div class="inner" style="border-radius: 20px;border: 2px solid #fa8500;">

                <form action="signup.php" method="post">
                    <?php
                        if($signupError != null){
                            echo "<h4>$signupError</h4>";
                        }
                    ?>
                    <h3 style="color: white;">Register</h3>
                    <input name='emailaddr' placeholder="Email Address" class="form-control">
                    <input type="password" name='password' placeholder="Password" class="form-control">
                    <input type="password" name='password2' placeholder="Confirm Password" class="form-control">
                    <button type="submit">Next</button><br>
                    <a style="color: white; font-size: 15px; margin-left: 120px;" href="https://techlm77.com/mediapage/login.php">Already registered?</a>
                </form>
            </div>
        </div>

    </body>

</html>