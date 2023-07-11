<?php
require 'connect.php';

if (isset($_POST['btn-reg'])) {


    $usename = $_POST['usename'];
    $sdt = $_POST['sdt'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if (!empty($usename) && !empty($sdt) && !empty($password) && !empty($repassword)) {
        //inser du lieu vao database
        /*    echo "<pre>";
            print_r($_POST); */

        $sql = "INSERT INTO `dangky` (`usename`,`sdt`,`password`,`repassword`) VALUES('$usename','$sdt','$password','$repassword') ";

        if ($conn->query($sql) === TRUE) {
            echo "
            <script>
                    alert'đăng ký thành công <3'
            </script>";

        } else {
            echo "loi.{$sql}" . $conn->error;
        }

    } else {
        echo "ban can nhap day du thong tin";
    }
}

?>