<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
    <form action="insert.php" method="POST">
        <div class="container">
    <div class="row justify-content-center  m-auto shadow mt-3 py-3 col-md-10 bg-primary-subtle ">
        <h3 class="text-center  font-monospace">TODO LIST</h3>
        <div class="col-8 ">
            <input type=" text " name ="list" class="form-control">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-outline-secondary">ADD</button>
        </div>
    </div>
    </div>
    </form>
<!-- getdata -->


<?php
include "config.php";
$rawData = mysqli_query($con, "Select * from tbltodo");
?>



<div class="container">
    <div class="col-10 bg-primary-subtle m-auto mt-3 py-3 ">
    <table>
        <tbody class = "table">
            <?php
            while ($row = mysqli_fetch_array($rawData)) {
                # code...
           
            ?>
            <tr>
                <td><?php echo $row['Id'] ?></td>
                <td><?php echo $row['list'] ?></td>
                <td style="width:10%;"><a href="delete.php?ID=<?php echo $row['Id']; ?>" class="btn btn-outline-danger">Delete</a></td>
                <td style =" width:10% ;"><a href="update.php?ID=<?php echo $row['Id']; ?>"  class="btn btn-outline-success">Update</a></td>
            </tr>
            <?php
             }
             ?>
        </tbody>
    </table>
    </div>
    </div>

</body>
</html>