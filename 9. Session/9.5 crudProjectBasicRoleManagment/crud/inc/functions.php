<?php

define('DB_NAME', 'data/db.txt');

    function seed(){


        $data = array(
            array(
                'id'=>1,
                'fname'=>'Tawfique',
                'lname'=>'Hossain',
                'roll'=> '55'
            ),
            array(
                'id'=>2,
                'fname'=>'Fahim',
                'lname'=>'Hossain',
                'roll'=> '65'
            ),
            array(
                'id'=>3,
                'fname'=>'Sujon',
                'lname'=>'Khan',
                'roll'=> '75'
            ),
            array(
                'id'=>4,
                'fname'=>'Mamun',
                'lname'=>'Hossain',
                'roll'=> '85'
            ),
            array(
                'id'=>5,
                'fname'=>'Tarek',
                'lname'=>'Hossain',
                'roll'=> '95'
            )
        );

        $serializedData = serialize($data);
        file_put_contents(DB_NAME, $serializedData,LOCK_EX);
    }


    function generateReport(){

        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);

    ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <?php if(hasPrivilege()): ?>
                    <th width="25%">Actions</th>
                <?php endif; ?>
            </tr>

            <?php
                if(count($students) > 0):
                foreach ($students as $student): ?>

                    <tr>
                        <td><?php printf("%s %s", $student['fname'], $student['lname']) ;?></td>
                        <td><?php printf("%s", $student['roll']) ;?></td>
                        <?php if (isAdmin()): ?>
                        <td><?php printf("<a href='index.php?task=edit&id=%s'>Edit</a> | <a class='delete' href='index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id']) ;?></td>
                        <?php
                        elseif(hasPrivilege()): ?>
                        <td><?php printf("<a href='index.php?task=edit&id=%s'>Edit</a>", $student['id']) ;?></td>
                        <?php else:
                            echo "";
                        endif; ?>
                    </tr>


                <?php
                    endforeach;

                    else:
                        $dataError = "<p align='center'>No data available!</p>";
                    endif;
            ?>

            <?php echo $dataError?? '' ;?>
        </table>


    <?php  }


    function addStudent($fname, $lname, $roll){

        $isFound = false;

        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
        $newId = generateNewId($students);

        foreach($students as $_student){

            if($roll == $_student['roll']){

                $isFound = true;
                break;
            }
        }

        $student = array(
            'id'=>$newId,
            'fname'=>$fname,
            'lname'=>$lname,
            'roll'=>$roll
        );

        if($isFound != true){

            array_push($students, $student);
            $serializedData = serialize($students);
            file_put_contents(DB_NAME, $serializedData, LOCK_EX);

            return true;
        }

        return false;
    }


    function getStudentData($id){

        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);

        foreach($students as $_student){

            if($_student['id'] == $id){

                return $_student;
            }
        }
        return false;

    }


    function updateStudentData($id, $fname, $lname, $roll){

        $found = false;
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);

        foreach($students as $_student){

            if($_student['roll'] == $roll && $_student['id'] != $id){
                $found = true;
                break;
            }
        }

        if(!$found){

            $students[$id-1]['fname'] = $fname;
            $students[$id-1]['lname'] = $lname;
            $students[$id-1]['roll'] = $roll;

            $serializedData = serialize($students);
            file_put_contents(DB_NAME,$serializedData,LOCK_EX);

            return true;
        }

        return false;
    }


    function deleteStudent($id){

        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);

        foreach ($students as $offset=>$student){

            if($student['id'] == $id){
                unset($students[$offset]);
            }
        }

        $students = serialize($students);

        file_put_contents(DB_NAME,$students,LOCK_EX);

        return $students;

    }


    function generateNewId($students){

        if(count($students) > 0){
            $getId = max(array_column($students, 'id'));
        }
        else{
            $getId = 0;
        }

        return $getId+1;
    }


    function isAdmin(){
        return 'admin' == $_SESSION['role'] ;
    }

    function isEditor(){
        return 'editor' == $_SESSION['role'];
    }

    function hasPrivilege(){
        return isAdmin() || isEditor();
    }