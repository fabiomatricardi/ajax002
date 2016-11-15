<?php
$server = 'localhost';
$user = 'fabio';
$password = 'pippo';
$db = 'webadm';

$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>