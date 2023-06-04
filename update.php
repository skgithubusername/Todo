<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
$id = $_GET['ID'];
include "config.php";
$Rdata = mysqli_query($con,"select * from tbltodo where  Id = $id ");
$data = mysqli_fetch_array($Rdata);
?>

<body class ="bg-info">
<form action="insert.php" method="POST">
        <div class="container">
    <div class="row justify-content-center  m-auto shadow mt-3 py-3 col-md-10 bg-white ">
        <h3 class="text-center text-primary font-monospace">UPDATE</h3>
        <div class="col-10">
            <input type=" text " value ="<?php echo $data['list']?>" name ="list" class="form-control">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-outline-secondary">UPDATE</button>
        </div>
    </div>
    </div>
    </form>
    
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
$id = $_GET['ID'];
include "config.php";
$Rdata = mysqli_query($con, "SELECT * FROM tbltodo WHERE Id = $id");
$data = mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
    <form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center  m-auto shadow mt-3 py-3 col-md-10 bg-white">
                <h3 class="text-center text-primary font-monospace">UPDATE</h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-secondary">UPDATE</button>
                    <input type="hidden" name ="id" value = "<?php echo $data['Id'] ?>">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
