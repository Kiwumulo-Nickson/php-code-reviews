<?php 

function OpenCon(){
    $servername="localhost";
    $username="root";
    $userpassword="root";
    $dbname ="php_code_review";

    $conn =  mysqli_connect($servername,$username,$userpassword,$dbname);

    if(!$conn){

        die("Connection failed" . mysqli_connect_error() );
        
        }
       
return $conn;

}





function  CloseCon($conn){
    
    $conn -> close();

}




?>