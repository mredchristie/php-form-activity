<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";


$pet_name = $_POST['name'];
$pet_age = $_POST['age'];
$pet_type = $_POST['type'];
?>


<?php

	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';


        $pet_name = $conn->real_escape_string($_POST ['name']);

        $pet_age = $conn->real_escape_string($_POST ['age']);

        $pet_type = $conn->real_escape_string($_POST ['type']);

        $sql = "INSERT INTO pets (pet_name, pet_age, pet_type) VALUES  ('$pet_name', '$pet_age, '$pet_type')";

        echo $sql;
		
	} else {
		
		echo 'Sorry, connection failed!';
		
	}





?>

</body>
</html>