<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";


$pet_name = $_POST['name'];
$pet_age = $_POST['age'];
$pet_type = $_POST['type'];


	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';


        $pet_name = $conn->real_escape_string($_POST ['name']);

        $pet_age = $conn->real_escape_string($_POST ['age']);

        $pet_type = $conn->real_escape_string($_POST ['type']);

        //$sql = "INSERT INTO pets (pet_name, pet_age, pet_type) VALUES  (\"$pet_name\", $pet_age, \"$pet_type\")";

        // this is a 2nd way of adding data to a database - this is useful as you dont have to use an excape character for the "" string. You need to do ""'s around strings as they can not be draw out like integers.
        $sql = <<<SQL
            INSERT INTO pets (pet_name, pet_age, pet_type) VALUES  ("$pet_name", $pet_age, "$pet_type")
        SQL;

        //$sql;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            echo "<br>";
            echo "USER ID IS:". $conn->insert_id;
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
		
	} else {
		
		echo 'Sorry, connection failed!';
		
	}
  header("Location: display-all-pets-delete.php");
  die();

