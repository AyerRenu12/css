<?php

$servername="localhost";
$username="root";
$password="";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//check connection
if($conn)
{
    echo"connect successfully";
}
else{
    die("connection failed".mysql_connect_error());
}

?>