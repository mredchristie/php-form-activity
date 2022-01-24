<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Display Pets Sctored in the Pets MySQL Table </title>

</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Display Pets Sctored in the Pets MySQL Table </title>

</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";
?>

<?php


$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Connection Failed");
$querey = mysqli_query ($conn, 'SELECT * FROM pets');
echo "<table>
        <tr>
            <th>Pet name</th>
            <th>Pet age </th>
            <th>Pet type </th>
        </tr>";
    

while ($row = mysqli_fetch_array($querey)) 
{
    echo "<tr>
            <td>" . $row['pet_name'] . "</td>
            <td>" . $row['pet_age'] . "</td>
            <td>" . $row['pet_type'] . "</td>
            <td> <a href='disaplay-all-pets-with-deletelink.php?pet_name=$row['pet_name']." '> Edit </a> </td>
        </tr>";
}

echo "</table>";

?>


</body>
</html>