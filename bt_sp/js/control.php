<?php
include('connect.php');
class data
{
    function login($use, $pass)
    {
        global $conn;
        $sql = "select * from dangky where usename = '$use' and password = '$pass'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }
    function select_use($use)
    {
        global $conn;
        $sql = "select * from dangky where usename = '$use'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function Insert($use, $sdt, $pass)
    {
        global $conn;
        $sql = "Insert into khachhang (usename, sdt, password) values ('$use','$sdt','$pass')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function Forgot($use, $sdt)
    {
        global $conn;
        $sql = "select * from dangky where usename='$use'and sdt = '$sdt'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }
    function Resetpass($use, $pass)
    {
        global $conn;
        $sql = "Update dangky set password = '$pass' where usename = '$use' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}