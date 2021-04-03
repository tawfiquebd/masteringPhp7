<?php
    session_name('auth');   // session name
    session_start([
        'cookie_lifetime' => 300,   // 5 minutes
    ]);

    $error = false;

//    checking if session is true or false
    isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : $_SESSION['loggedin'] = false;

    if(isset($_POST['username']) && isset($_POST['password']) ){

        if('admin' == $_POST['username'] && '21232f297a57a5a743894a0e4a801fc3' == md5($_POST['password'] )){
            $_SESSION['loggedin'] = true;
        }
        else{
            $error = true;
            $_SESSION['loggedin'] = false;
        }

    }

    if(isset($_POST['logout'])){

        $_SESSION['loggedin'] = false;
        session_destroy();
    }
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Authentication</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">


    <style>

        .header-area{
            margin: 20px 0;
        }
        .navbar-area{
            text-align: center;
        }
        a{
            text-decoration: none;
            font-weight: normal;
            font-size: 16px;
            margin: 0 10px;
        }
        b {
            text-align: center;
            display: block;
            margin: 5px 0 35px;
        }
    </style>
</head>
<body>

<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <div class="header-title">
                    <h2>Simple Authentication Example</h2>
                    <h6>A sample project to perform user authentication by session</h6>
                    <hr>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">

                <?php

                    if(true == $_SESSION['loggedin']){
//                        echo md5("admin");
                        echo "<blockquote>Hello Admin, Welcome!</blockquote><br>";
                    }
                    else{
                        echo "<blockquote>Hello Stranger, Login Below!</blockquote>";
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">

                <?php
                    if(true == $error){
                        echo "<blockquote>Username and Password doesn't match!</blockquote>";
                    }

                    if(false == $_SESSION['loggedin'] ){
                ?>
                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" >

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" >

                    <input class="button-primary" type="submit" name="login" value="LOG IN">
                </form>
                <?php } else { ?>
                <form action="auth.php" method="POST">
<!--                    <input type="hidden" name="logout" value="1">-->
                    <button class="button-primary" name="logout" type="submit">LOG OUT</button>
                </form>

                <?php } ?>
            </div>
        </div>

</header>

</body>
</html>