<?php
    include ("classes.php");

    $obj = new operate;

    if(isset($_POST['submit'])){
        $myArray = array(
            "fname" => $_POST['Fname'],
            "lname" => $_POST['Lname'],
            "email" => $_POST['Email'],
            "address" => $_POST['Address'],
            "password" => md5($_POST['Password'])
        );

        if ($obj->insert_records('s_data',$myArray)){
            header("location:index.php");
        }else{
            heder("location:index.php");
        }
    }
?>