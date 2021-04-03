<?php

    $fruits = ['apple', 'dates', 'Banana', 'orange', 'cucumber'];

    include_once('selectinputFunctions.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html select options</title>

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
            <h3>Html Select Option</h3>
            <h5>Html Select Input options handling</h5>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <p>
                <?php

                    $selectedItem = '';

                    if(isset($_POST['fruits']) && $_POST['fruits'] != ''){
                        printf("You have selected: %s", filter_input(INPUT_POST, 'fruits',FILTER_SANITIZE_STRING));
                        $selectedItem = $_POST['fruits'];
                    }
                ?>
            </p>
<!--            --><?php //echo "<label>You have selected: ". strtolower(join(', ', $fruits)). ".</label>." ; ?>
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="">

                <div>
                    <label >Select your favorites Fruits</label>
                    <select name="fruits" id="fruits">
                        <option value="" selected disabled >--Select your fruits--</option>
                        <?php getAllSelectOptions($fruits, $selectedItem); ?>
                    </select>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>