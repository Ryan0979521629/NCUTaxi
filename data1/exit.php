<?php require_once'../database.php';?>
<?php
    $guest_PhoneNumber = $_POST["guest_PhoneNumber"];
    $create_randomnumber=$_POST["randomnumber"];
    if($guest_PhoneNumber!=-1){
        $sql="DELETE FROM `client` WHERE `phonenumber`=$guest_PhoneNumber";
        $result=mysqli_query($link,$sql);
        }
    else{
        $sql1="DELETE FROM `room` WHERE `random`=$create_randomnumber";
        $sql2="DELETE FROM `client` WHERE `randomnumber`=$create_randomnumber";
        $result=mysqli_query($link,$sql2);
        $result1=mysqli_query($link,$sql1);
        unlink($create_randomnumber.'.php');
    }
        ?>