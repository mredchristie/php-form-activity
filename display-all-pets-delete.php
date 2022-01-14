<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <a href="add-a-pet-record.html">Add</a>
    <a href="pet-search.html">Search</a>
    

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task6";
?>
<?php

$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Sory connection not established.");

    $sql = 'SELECT * FROM pets';

    $query = mysqli_query($conn, $sql);

    echo "<table>
        <tr>
            <th>Pet_id </th>
            <th>Pet_name</th>
            <th>Pet_age</th>
            <th>Pet_type</th>
            <th>Delete</th>
        </tr>";
        
        
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr>
                <td> ". $row['pet_id'] . "</td>
                <td> ". $row['pet_name'] . "</td>
                <td> ". $row['pet_age'] . "</td>
                <td> ". $row['pet_type'] . "</td>
                <td> <a href='delete-action.php?pet_id=".$row['pet_id']." '> Delete </a> </td>
            </tr>";

    }

    echo"<table>";

?>

</body>
</html>