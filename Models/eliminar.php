<?php
include "connection.php";
$conn = OpenCon();
$cedula = $_POST['cedula'];

$query = "DELETE FROM students WHERE cedula = '${cedula}'";

if($conn->query($query) === true)
{
  echo json_encode('Se elimino exitosamente');
}
else
{
  echo json_encode('Something goes wrong'.$sqlEliminar.$conn->error);
}
?>