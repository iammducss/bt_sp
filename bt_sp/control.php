<?php 
include('connect.php');
class data{
    function select(){
        global $conn;
        $sql="SELECT * FROM dangky ";
        $run = mysqli_query($conn,$sql);
        return $run ;
    }
    function dangky($usename ,$sdt,$password){
        global $conn;
        $sql = "SELECT * FROM dangky WHERE usename='$usename' ,sdt='$sdt' and passwword='$password'";
        $run = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($run);
        return $num;
    }
    function insert($ID,$usename ,$sdt,$password){
        global $conn;
        $sql = "INSERT INTO dangky VALUES ('$ID','$usename ','$sdt','$password')";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    function update_mk($usename ,$sdt,$password){
        global $conn;
        $sql = "UPDATE dangky password='$password' where usename='$usename' and sdt='$sdt'";
        $run = mysqli_query($conn,$sql);
        return $run ;
    }
}
?>