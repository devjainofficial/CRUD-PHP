<?php
include 'dbcon.php';
if(isset($_POST['add_students'])){

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$age = $_POST['age'];

    if($fname == "" || empty($fname)){
        header('location:index.php?message=You Need to fill the first name!');
    }
    else{
        $query="insert into `students` (`firstName`, `lastName`, `age`) values ('$fname', '$lname', '$age')";
    }

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed");
    }
    else{
        header('location:index.php?insert_msg=Your data has been added successfully');
    }
}




?>