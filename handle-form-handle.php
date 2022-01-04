<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p> Thank you for submitting the following information:</p>

<p><h1></h1></p>
	
   <?php

	$firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $housenumber = $_POST['housenumber'];
    $street = $_POST['street'];
    $townandcity = $_POST['townandcity'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];






   ?>


<hr>
Firstname = <?= $_POST['firstname'] ?>
<br>
Surname = <?= $_POST['surname']?>
<br>
Age = <?= $_POST['age']?>
<br>
Housenumber = <?= $_POST['housenumber']?>
<br>
Street = <?= $_POST['street']?>
<br>
Town and City  = <?= $_POST['townandcity']?>
<br>
County = <?= $_POST['county']?>
<br>
Postcode = <?= $_POST['postcode']?>
    
</body>
</html>