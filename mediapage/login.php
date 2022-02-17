<?php
    chdir("backend");
    require("setup.php");
    
    if(isset($_GET['logout'])){
        setcookie("login_token", "", time());
        header("Location: .");
        die();
    }
    
    $loginError = false;

    if(isset($_POST['emailaddr'], $_POST['password'])){
        $currentUser = getCurrentUser();

        if($currentUser !== null){
            header("Location: .");
            die();
        }

        $submittedEmail = $_POST['emailaddr'];
        $submittedPassword = $_POST['password'];

        $safeEmail = escapeSql($submittedEmail);
        $result = query("select * from user_accounts where `email_address` = '$safeEmail'");

        $numRows = mysqli_num_rows($result);

        if($numRows > 0){
            $rowData = mysqli_fetch_assoc($result);

            $storedHash = $rowData['password_hash'];
            $correctPassword = password_verify($submittedPassword, $storedHash);

            if($correctPassword){
                $code = openssl_random_pseudo_bytes(54);
                $code = base64_encode($code);

                $time = time();
                $escapedCode = escapeSql($code);
                $escapedId = escapeSql($rowData['id']);
                query("insert into user_logins ( `userId`, `code`, `seen_time` ) values ( '$escapedId', '$escapedCode', '$time' )");

                setcookie("login_token", $code);

                header("Location: .");
                die();

            } else {
                $loginError = true;
            }
        } else {
            $loginError = true;
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
                <form action="login.php" method="post">
                    <?php
                        if($loginError) echo "<h4>Incorrect login info submitted</h4>";
                    ?>
                    <h3 style="color: white;">Log in</h3>
                    <input name='emailaddr' placeholder="Email Address" class="form-control">
                    <input type="password" name='password' placeholder="Password" class="form-control">
                    <button type="submit">Next</button><br>
                    <a style="color: white; font-size: 15px; margin-left: 135px;" href="https://techlm77.com/mediapage/signup.php">Not registered?</a>
                </form>
            </div>
        </div>
        
    </body>

</html>