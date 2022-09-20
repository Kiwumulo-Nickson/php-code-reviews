<?php 
include_once 'db.php';
 
$sql = "SELECT * FROM persons";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 
while($data = mysqli_fetch_array($query))
{
    echo "Id = ".$data['id']."<br>";
    echo "Name = ".$data['name']."<br>";
    echo "Email = ".$data['email']."<br>";
    echo "Mobile = ".$data['mobile']."<br><hr>";
}
?>