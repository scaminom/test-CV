<?php
include 'connection.php';
$conn = OpenCon();
$query = "SELECT * FROM students";
$fetch = $conn->query($query);
$result = array();
while($row = $fetch->fetch_assoc())
{
    $result[] = $row;
}

echo json_encode($result);
?>