<?php
$server="localhost";
$username="root";
$password="";
$dbconnection="c1";

$con=mysqli_connect($server,$username,$password,$dbconnection);
if (!$con) {
    echo "Error".mysqli_connect_error();
} else {
   echo "connection sucessfully"."<br>";
}
?>
