<?php
$con = mysqli_connect("localhost","root","","gymnsb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "No se pudo conectar a MySQL: " . mysqli_connect_error();
  }
?>
