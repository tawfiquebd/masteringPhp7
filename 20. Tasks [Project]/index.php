<?php
    include_once 'config.php';
    // Database connection
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if (!$connection){
        throw new Exception("Failed to connect database");
    }

    // Get all records
    $query = "SELECT * FROM tasks WHERE complete = 0 ORDER BY id ASC"; // default is: ORDER BY id ASC
    $result = mysqli_query($connection, $query);

    // Get completed records only
    $completeTaskQuery = "SELECT * FROM tasks WHERE complete = 1";
    $completeTaskResult = mysqli_query($connection, $completeTaskQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo/Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }

        #main {
            padding: 0px 150px 0px 150px;;
        }

        #action {
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container" id="main">
    <h1>Tasks Manager</h1>
    <p>This is a sample project for managing our daily tasks. We're going to use HTML, CSS, PHP, JavaScript and MySQL
        for this project</p>

    <?php
        if(mysqli_num_rows($completeTaskResult) > 0){ ?>

        <h4>Complete Tasks</h4>
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Task</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($cdata = mysqli_fetch_assoc($completeTaskResult)){
                        $timestamp = strtotime($cdata['date']);
                        $date = date("jS M, Y", $timestamp);
                ?>
                <tr>
                    <td><input class="label-inline" type="checkbox" value="<?php echo $cdata['id']; ?>"> </td>
                    <td><?php echo $cdata['id']; ?></td>
                    <td><?php echo $cdata['task']; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><a class="delete" href='#'>Delete</a></td>
                </tr>
                <?php

                    }

                ?>
            </tbody>
        </table>
        <p>...</p>

    <?php

        }

    ?>

        <h4>Upcoming Tasks</h4>
        <?php
            if(mysqli_num_rows($result) == 0){
                echo "<p>No Task Found</p>";
            }
            else{
            ?>
        <form action="" method="POST">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while($data = mysqli_fetch_assoc($result)){
                    $timestamp = strtotime($data['date']);  // converted to timestamp format
                    $date = date("jS M, Y", $timestamp);    // S is suffix here
                ?>

                    <tr>
                        <td><input class="label-inline" type="checkbox" value="<?php echo $data['id']; ?>"></td>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['task']; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><a class="delete" href='#'>Delete</a> |
                            <a class="complete"  href='#'>Complete</a></td>
                    </tr>
                <?php
                    }
                    mysqli_close($connection);
                ?>
                </tbody>
            </table>
            <select id="action" name="action" >
                <option value="0">With Selected</option>
                <option value="bulkdelete">Delete</option>
                <option value="bulkcomplete">Mark As Complete</option>
            </select>
            <input class="button-primary" id="bulksubmit" type="submit" value="Submit">
        </form>
        <?php
            }
        ?>
    <p>...</p>
    <h4>Add Tasks</h4>
    <form method="post" action="tasks.php">
        <fieldset>
            <?php
                $added = $_GET['added'] ?? '';
                if($added){
                    echo "<p>Task Added Successfully</p>";
                }
            ?>
            <label for="task">Task</label>
            <input type="text" placeholder="Task Details" id="task" name="task">

            <label for="date">Date</label>
            <input type="text" placeholder="Task Date" id="date" name="date">

            <input class="button-primary" type="submit" value="Add Task">
            <input type="hidden" name="action" value="add">
        </fieldset>
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</html>