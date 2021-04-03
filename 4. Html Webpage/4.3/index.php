<?php

    // User input sanitize
    // User er input e kono malicious code thakle seta clean kore

    //One of the main differences between filter_var() and filter_input()
    // is how they handle undefined variables/indexes.
    // If $_GET['foo'] doesn't exist:

    //$foo = filter_var($_GET['foo'], FILTER_SANITIZE_NUMBER_INT);

    //It will Returns an empty string "" and generates:

    //Notice: Undefined index: foo

    /**So you will have to wrap this in if(isset($_GET['foo'])) check first.

    And Whereas:

    $foo = filter_input(INPUT_GET, 'foo', FILTER_SANITIZE_NUMBER_INT);

    Returns NULL And it Does Not generate an error.
    **/

    /*  filter_var()  and filter_input() sanitize input fields

        and remove all illegal characters .

        The filter_input() function gets an external variable
        (e.g. from form input) and optionally filters it.
        This function is used to validate variables from insecure sources,
        such as user input.

    */

    //  htmlspecialchars()
    //  The htmlspecialchars() function converts some predefined
    //  characters to HTML entities. The predefined characters are:

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User input sanitize</title>

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
            <h3>User input sanitize</h3>
            <h5>Remove unwanted data or sanitize malicious code</h5>
            <hr>
            <!--

            htmlspecialchars()
            The htmlspecialchars() function converts some predefined
            characters to HTML entities. The predefined characters are:

                & (ampersand) becomes &amp;
                " (double quote) becomes &quot;
                ' (single quote) becomes &#039;
                < (less than) becomes &lt;
                > (greater than) becomes &gt;

            -->
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php

                $fname = "";
                $lname = "";

            ?>

            <!--
            filter_input(INPUT_POST / INPUT_GET , 'name variable' , FILTER_TYPE)
            filter name are: FILTER_SANITIZE_EMAIL ,
            FILTER_SANITIZE_URL ,
            FILTER_SANITIZE_STRING ,
            FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            -->

            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) : ?>

                <?php
//                    $fname = htmlspecialchars($_POST['fname']);
//                    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING );
                    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
                ?>

            <?php endif; ?>


            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ ?>

                <?php
//                    $lname = htmlspecialchars($_POST['lname']);
//                    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING );
                    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
                ?>

            <?php } ?>


        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            First Name: <?php echo $fname; ?>  <br>
            Last Name: <?php echo $lname; ?>  <br>
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
                <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>