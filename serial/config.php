<?php

$localhost = 'localhost';
$username= 'root';
$password = '';
$db = 'fun';

$conn =  new mysqli($localhost,$username,$password,$db);

if ($conn -> connect_error) {
        die("connect to faild". $conn->connect_error);
}
else{
    // echo "connectd";
}
?>