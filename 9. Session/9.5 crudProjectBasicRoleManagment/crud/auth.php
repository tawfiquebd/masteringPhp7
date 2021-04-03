<?php
    session_start([
        'cookie_lifetime' => 30,
    ]);

    $error = false;

    if($_SESSION['loggedin'] == true){
        header("Location: index.php");
    }
    else{
        $_SESSION['loggedin'] = false;
    }

    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

    $fp = fopen("data/users.txt",'r');

    if($username && $password ){
        while($data = fgetcsv($fp)){

            if($data[0] == $username && $data[1] == sha1($password)){
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $data[2];
                header("Location: index.php");
            }

        }
        if(!$_SESSION['loggedin']){

            $error = true;
        }


    }

    if(isset($_GET['logout']) && $_GET['logout'] == true){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        $_SESSION['role'] = false;
        session_destroy();
        header("Location: index.php");
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

                    if(!$_SESSION['loggedin']){
                        echo "<blockquote>Hello Stranger, Login Below!</blockquote><br>";
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
                ?>
                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" >

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" >

                    <input class="button-primary" type="submit" name="login" value="LOG IN">
                </form>

            </div>
        </div>

</header>

</body>
</html>