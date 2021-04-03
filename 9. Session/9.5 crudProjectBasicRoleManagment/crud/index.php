<?php
    session_start([
        'cookie_lifetime' => 30,
    ]);

    require_once 'inc/functions.php';

    isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : $_SESSION['loggedin'] = false;
    isset($_SESSION['role']) ? $_SESSION['role'] : $_SESSION['role'] = false;


    $info = '';
    $task = $_GET['task'] ?? 'report';

//    stdent delete process

    if('delete' == $task){
        if(!isAdmin()){

            header("Location: ?task=report");
            return;
        }

        $id = $_GET['id'];

        if($id > 0){
            $isDeleted = deleteStudent($id);

            if($isDeleted == true){
                header("location: index.php");
            }
        }
    }

//    If user not authenticated
    if('edit' == $task){

        if(!hasPrivilege()):
            header("Location: ?task=report");
            return;

        endif;
    }


//    data seed process
    if('seed' == $task){

        if(!isAdmin()){
            header('location: http://php.dev.com/index.php?task=report');
            return;
        }
        seed();
        $info = 'data seeding successfully!';
    }

    $fname = $lname = $roll = '';
    $success = $error = 0;

    if(isset($_POST['submit'])){
        //    sanitize user input
        $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
        $roll = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

        if($id){
            // update student process
            if($fname != '' && $lname != '' && $roll != ''){

                $result = updateStudentData($id, $fname, $lname, $roll);

                if($result){
                    header("location: index.php?task=report");
                }
                else{
//                    header("location: index.php?task=edit&id=$id&error=1");
                    $error = 1;
                }
            }
        }
        else{
            // add student process
            if($fname != '' && $lname != '' && $roll != ''){

                $result = addStudent($fname, $lname, $roll);

                if($result){
                    header('location: index.php');
                }
                else{
                    $error = 1;
                }
            }
        }

    }



?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project 2 - CRUD</title>

    <link rel="stylesheet" href="../inc/styles/milligram.min.css">

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
                        <h2>Project 2 - CRUD</h2>
                        <h6>A simple project to perform CRUD operations using plain files and PHP</h6>
                        <hr>
                    </div>

                    <div class="navbar-area">
                        <?php include_once 'inc/templates/nav.php' ;?>
                        <hr>
                        <p> <?php if($info){ echo $info;} ?> </p>
                    </div>
                </div>
            </div>


            <?php if($error == 1) { ?>
                <b>Duplicate Roll number found!</b>

            <?php } ?>


            <?php if('report' == $task): ?>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <?php generateReport(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if('add' == $task): ?>

                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="?task=add" method="POST">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                            <label for="roll">Roll</label>
                            <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                            <input class="button-primary" type="submit" name="submit" value="Save">
                        </form>
                    </div>
                </div>
            <?php endif; ?>

            <?php
                if('edit' == $task):
                $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
                $student = getStudentData($id);
                if ($student):
            ?>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="" method="POST">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">

                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">

                            <label for="roll">Roll</label>
                            <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>">

                            <input class="button-primary" type="submit" name="submit" value="Update">
                        </form>
                    </div>
                </div>
            <?php endif; endif; ?>
        </div>
    </header>

    <script src="assets/js/script.js"></script>
</body>
</html>