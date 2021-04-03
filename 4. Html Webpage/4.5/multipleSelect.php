<?php

    $fruitsList = ['apple', 'dates', 'Banana', 'orange', 'cucumber'];

    include_once('multipleSelectInputOptionFunctions.php');

?>[

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Multiple select options</title>

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
            <h3>Html Multiple Select Option</h3>
            <h5>Html Multiple Select Input options handling</h5>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <p>
                <?php

//                    $selectedItems = isset($_POST['fruits']) ? $_POST['fruits'] : array();
//                    $selectedItems = $_POST['fruits'] ?? array();   // php 7 null collasce operator

                    $selectedItems = isset($_POST['fruits']) ? filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) : array();

                    if(count($selectedItems) > 0){
                        printf("You have selected: %s", join(', ', $selectedItems ) );

                    }

                ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="">

                <div>
                    <label >Select your favorites Fruits</label>
                    <select style="height: 150px" name="fruits[]" id="fruits" multiple>
                        <option value="" selected disabled >--Select your fruits--</option>
                        <?php getMultipleSelectOption($fruitsList, $selectedItems); ?>
                    </select>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


</body>
</html>