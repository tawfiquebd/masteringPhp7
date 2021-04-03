<?php

    // xss prevention in chrome and safari browser
    // header('X-XSS-Protection:1; mode=block');
    // xss = cross site scripting // javascript injection
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Http Verb Discussion</title>

    <!-- Favicon Icons -->
    <link rel="shortcut icon" href="https://img.favpng.com/17/15/18/favicon-computer-icons-icon-design-image-share-icon-png-favpng-Gcr0dC9VNRr9aywRBtm9r8R7f.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->

    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>

<style>

    body{
        margin-top: 30px;
    }

</style>

<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h3>Registration Form</h3>
                <h4>Http verbs - Get, Post, Put, Delete, Patch</h4>
                <hr>
                <!--
                    Get : data url er moddhe diye pass korar jonno / url er moddhe diye data pawar jonno / read korar jonno
                    Post: data send korar jonno, header er moddhe diye data pabo . / create korar jonno
                    Put : update korar jonno
                    Delete: Delete korar jonno
                    Patch : Pura dataset eksathe update na kore kichu element/ongsho update korar jonno

                -->
            </div>
        </div>

        <!--
            Super Global Variable
            $_GET[' ']      = GET method er jonno
            $_POST[' ']     = POST method er jonno
            $_REQUEST[' ']  = GET and POST 2 tar method er jonno kaaj korbe
        -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php if(isset($_POST['fname']) && !empty($_POST['fname'])) : ?>
                First Name: <?php echo $_POST['fname']; ?>  <br>
                <?php endif; ?>

                <?php if(isset($_POST['lname']) && !empty($_POST['lname'])){ ?>
                Last Name: <?php echo $_POST['lname']; } ?> <br>

                <hr>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <!--
                    Form action empty rakhle by default oi page/form e data process korbe
                    Form e method blank rakhle by default get method kaaj korbe
                -->
                <form method="POST" action="">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>