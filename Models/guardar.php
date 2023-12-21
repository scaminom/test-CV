<?php
include "connection.php";
$conn = OpenCon();
$cedula=$_POST['cedula'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];

$query = "INSERT INTO students(cedula,        first_name,      last_name) 
                        VALUES('${cedula}','${first_name}','${last_name}')";

if($conn->query($query) == true)
{
  echo json_encode('Se guardo exitosamente');
}
else
{
  echo json_encode('Something goes wrong'.$sqlSelect.$conn->error);
}
?>