<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>    
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
        <br><br>
        <h1 class="text-center text-warning"> Display Table Data</h1>
        <br>
        <button class="btn btn-primary"><a href="./insert.php" class="text-light">Add user</a></button>
        <table class="table table-striped table-hover table-bordered">
            <tr class="bg-dark text-white text-center">
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
                <?php
                    include 'config.php';
                    $sql = "SELECT * FROM crud";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <tr class="text-center">
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><button class=" btn btn-primary "> <a href="update.php?updateid= <?php echo $row['id'];?>" class="text-white"> Update </a></button></td>
                <td><button class=" btn btn-danger"> <a href="delete.php?deleteid= <?php echo $row['id'];?>" class="text-white"> Delete </a></button></td>
            </tr>
            <?php
                }
            ?>
        </table>        
        </div>
    </div>
    
</body>
</html>