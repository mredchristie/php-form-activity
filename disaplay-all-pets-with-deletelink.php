<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<?php

include "db-connect.php";

$pet_id = $_GET['pet_name'];

$data = mysqli_fetch_array( mysqli_querey($conn, "SELECT * FROM pets WHERE pet_name='$pet_id'"));
?>


<form action="updated-pet-record.php" method="post">
<input type='hidden' name='id' value="<?php echo $data['pet_name'] ?>" /></p>
<p> Edit Pet Name: <input type='text' name='name' value="<?php echo $data['[pet_age']?> "/> </p>
<p> Edit Pet Age <input type='text' name='age' value="<?php echo $data['pet_age'] ?>" /> </p>
<p> Edit Pet Type <input type='text' name='type' value="<?php echo $data['pet_type'] ?>" /> </p>
<p> <input type='submit' value="Update Pet Details" /> </p>


</body>
</html>