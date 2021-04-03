<?php

    // calling our header/external file

    include_once('functions.php');

//    print_r($_REQUEST); // checking all inputs values are working or not


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html input checkbox</title>

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


<body>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h3>Html Input</h3>
            <h5>Html Input Checkbox and Group Checkbox</h5>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php

                $fname = "";
                $lname = "";
                $checkbox = "";

                // single checkbox checked
                if(isset($_REQUEST['cb']) && $_REQUEST['cb'] == 1){
                    $checkbox = "checked";
                }

            ?>


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
            <form method="POST" action="">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">

                <div>
                    <input type="checkbox" name="cb" id="cb"  value="1" <?php echo $checkbox ?> >
                    <label class="label-inline" for="cb" >Remember me</label>
                    <hr>
                </div>

                <div>
                    <label >Choose your favorites food</label>

                    <input type="checkbox" name="fruits[]" id="apple" value="apple" <?php isFruitChecked("apple")?> >
                    <label class="label-inline" for="apple">Apple</label> <br>

                    <input type="checkbox" name="fruits[]" id="orange" value="orange" <?php isFruitChecked("orange")?> >
                    <label class="label-inline" for="orange">Orange</label> <br>

                    <input type="checkbox" name="fruits[]" id="watermelon" value="watermelon" <?php isFruitChecked("watermelon")?> >
                    <label class="label-inline" for="watermelon">WaterMelon</label> <br>

                    <input type="checkbox" name="fruits[]" id="banana" value="banana" <?php isFruitChecked("banana")?> >
                    <label class="label-inline" for="banana">Banana</label> <br>

                    <input type="checkbox" name="fruits[]" id="jackfruit" value="jackfruit" <?php isFruitChecked("jackfruit")?> >
                    <label class="label-inline" for="jackfruit">Jack-fruit</label> <br>

                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>