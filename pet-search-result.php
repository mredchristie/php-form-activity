<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";
?>
<?php

$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Sory connection not established.");



$pet_name = strip_tags($_POST['name']);

$querey = mysqli_query($conn, 'SELECT * FROM pets WHERE pet_name like "%'. $pet_name . '%"');
echo "<table>
        <tr>
            <th>Pet ID</th>
            <th>Pet Name</th>
            <th>Pet Age</th>
            <th>Pet Type</th>
        </tr>";
    
while ($row = mysqli_fetch_array($querey)) {
    echo "<tr>
    <td>", $row['pet_id'], "</td>
    <td>", $row['pet_name'], "</td>
    <td>", $row['pet_age'], "</td>
    <td>", $row['pet_type'], "</td>
    </tr>";


}

echo "</table>";

?>