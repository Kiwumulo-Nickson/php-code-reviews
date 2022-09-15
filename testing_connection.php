<?php 
include 'db-connection.php';
 

$conn = OpenCon();

echo 'Connected Successfully';

CloseCon($conn);


?>