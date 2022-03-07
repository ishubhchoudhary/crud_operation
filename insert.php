<?php
include 'config.php';
if(isset($_POST['submit'])){
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `crud` (`name`, `password`) VALUES('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
    }else{
        echo mysqli_connect_error($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class=" text-white text-center">Insert Operation</h1>
                </div><br>

                <label> Username : </label>
                <input class="form-control" type="text" name="username"><br>                  

                <label> Password : </label>
                <input class="form-control" type="text" name="password"><br>
                
                <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            </div>
        </form>
    </div>
</body>
</html>