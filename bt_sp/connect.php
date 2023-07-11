<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_shopp";

$conn = mysqli_connect($server, $user, $pass, $database);

if ($conn->connect_errno) {
    die("ket noi khong thanh cong" . $conn->connect_error);
} else {
     echo "ket noi thanh cong";
}

?>