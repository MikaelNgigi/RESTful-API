<?php
header('content-type:application/json');
include '../config/db.php';
//GET Order by their id

$query = mysqli_query($conn, "SELECT * FROM transactions");
while ($row = mysqli_fetch_assoc($query)){
    $output[] = $row;
}
$json_response = json_encode($output);
echo $json_response;
mysqli_close($conn);
