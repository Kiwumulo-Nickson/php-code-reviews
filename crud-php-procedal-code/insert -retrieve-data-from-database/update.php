<?php 
 
include_once 'db.php';
 
$sql = "UPDATE persons SET name = 'Hello',email = 'Test',mobile = '98745612' WHERE id=1 ";
 
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}
 
   
?>