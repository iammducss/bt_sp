<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body>
    <h1 class="text-center py-3 ">HOME</h1>
    <div class="row justify-content-around row col-md-12 bg-light p-2 my-3">
        <p>
            <?php
            session_start();
            if (empty($_SESSION['user']))
                header('location:dangnhap.php');
            else
                echo "Welcome " . $_SESSION['user'];

            ?>
        </p>
    </div>


</body>

</html>