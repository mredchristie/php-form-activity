<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";

$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Sorry connection not established.");

$id = $_GET['pet_id'];

$sql = "DELETE FROM pets WHERE pet_id={$id}";

mysqli_query($conn, $sql);

//    echo ' you have successfully deleted ! :)'
header("Location: display-all-pets-delete.php");
die();
