<?php
include "connection.php";
$conn = OpenCon();
$cedula=$_GET['cedula'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];

$query = "UPDATE students SET first_name = '${first_name}', last_name = '${last_name}'
          WHERE cedula = ${cedula}";

if($conn->query($query) == true)
{
  echo json_encode('Se actualizo exitosamente');
}
else
{
  echo json_encode('Something goes wrong'.$sqlSelect.$conn->error);
}
?>