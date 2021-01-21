<?php
$server = 'localhost';
$database = 'posjava';
$port = 5432;
$user = 'postgres';
$pwd = 'qwe123';




$conn = pg_connect("host=$server port=$port dbname=$database user=$user password=$pwd");

if($conn){
    echo"connected";
}else{
    echo"not connected";
}

?>