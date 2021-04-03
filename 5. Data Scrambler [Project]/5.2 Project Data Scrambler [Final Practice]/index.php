<?php

    include_once('scramblerf.php');

    $key = "abcdefghijklmnopqrstuvwxyz1234567890";

    $task = 'encode';

    if(isset($_GET['task']) && $_GET['task'] != ''){
        $task = $_GET['task'];
    }

    if('generatekey' == $task){
        $arrayKey = str_split($key);
        shuffle($arrayKey);
        $generatedkey = join('',$arrayKey);

    }
    else{
        $generatedkey = $key;
    }

    if(isset($_POST['key']) && $_POST['key'] != ''){

        $generatedkey = $_POST['key'];

    }

    $originalData = '';
    if(isset($_POST['data']) && $_POST['data'] != ''){

        $originalData = $_POST['data'] ?? '';
        $generatedData = encodeData($originalData, $generatedkey);
    }

    if($task != ''){
        $originalData = $_POST['data'] ?? '';
        if('decode' == $task){
            $generatedData = decodeData($originalData, $generatedkey);
        }

    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Scrambler - Project</title>

    <!-- Favicon Icons -->
    <link rel="shortcut icon" href="https://img.favpng.com/17/15/18/favicon-computer-icons-icon-design-image-share-icon-png-favpng-Gcr0dC9VNRr9aywRBtm9r8R7f.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{
            margin-top: 30px;
        }
        .nagivation{
            width: 300px;
            margin: 0 auto;
        }
        .nagivation a{
            margin: 0 5px;
        }
    </style>
</head>


<body>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h3>Data Scrambler Final Practice</h3>
            <h5>Use this application to scramble your data</h5>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <div class="nagivation">
                <a href="/?task=encode">Encode |</a>
                <a href="/?task=decode">Decode | </a>
                <a href="/?task=generatekey">Generate Key</a> <br> <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="index.php<?php if(isset($task) && $task != 0){ echo "?task=$task";} ?>" >

                <label for="key">Key</label>
                <input type="text" name="key" id="key" <?php displayKey($generatedkey);?> >

                <label for="data">Data</label>
                <textarea name="data" id="data" cols="30" rows="10"><?php echo $originalData;?></textarea>

                <label for="result">Result</label>
                <textarea id="result" cols="30" rows="10"><?php if(isset($generatedData)){echo $generatedData;}?></textarea>

                <button type="submit">Do it for me</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>