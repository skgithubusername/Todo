
 <?php
if (isset($_POST['list'])) {
    $list = $_POST['list'];

    // Your database connection code here
    $con = mysqli_connect("localhost", "root", "", "todo") or die("Connection failed");

    // Your insert query code here
    $query = "INSERT INTO `tbltodo` (`list`) VALUES ('$list')";
    mysqli_query($con, $query) or die("Insert failed");

    // Close the database connection
    mysqli_close($con);

    // Redirect to the index page
    header("Location: index.php");
    exit();
} else {
    echo "Error: 'list' key is not defined in the POST data";
}
?>

