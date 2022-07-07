<?php
$servername="localhost";
$username="root";
$password="";
$database="flutter_ebook";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry we failed".mysqli_connect_error());
}
?>