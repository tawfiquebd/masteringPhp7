<?php

    $allowedFileTypes = array('image/png', 'image/PNG', 'image/jpg', 'image/JPG', 'image/jpeg', 'image/JPEG');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Multiple File Upload</title>

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
    </style>
</head>


<body>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h3>Html Multiple File Upload</h3>
            <h5>Html Multiple File Upload handling</h5>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <pre>
                <?php

                    if(isset($_FILES['photo'])) {

                        $files = count($_FILES['photo']['name']);
                        $isUploaded = $fileTypeErr = $fileSizeErr = 0;

                        for ($i = 0; $i < $files; $i++) {

                            if ($_FILES['photo']['size'][$i] > 1024 * 1024) {
                                $fileSizeErr++;
                            }
                            else if (in_array($_FILES['photo']['type'][$i], $allowedFileTypes) != true) {
                                $fileTypeErr++;
                            }
                            else {

                                $image_name = $_FILES['photo']['name'][$i];
                                $temp_file = $_FILES['photo']['tmp_name'][$i];
                                move_uploaded_file($temp_file, "files/" . $image_name);
                                $isUploaded++;
                            }

                        }


                        if ($fileSizeErr > 0) {
                            echo "<p>File size must be less than: 1Mb</p>";
                        }
                        if ($fileTypeErr > 0) {
                            $filesString = join(", ", $allowedFileTypes);
                            echo "<p>File types must be : " . preg_replace('(image/)', '', $filesString) . "</p>";

                        }
                        if ($isUploaded > 0) {
                            echo "<p>File uploaded successfully!</p>";
                        }


                    }

                ?>
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="" enctype="multipart/form-data">

                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">

                <input type="file" name="photo[]" > <br>
                <input type="file" name="photo[]" > <br>
                <input type="file" name="photo[]" > <br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>