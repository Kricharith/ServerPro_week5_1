<?php
$servername ="127.0.0.1";
$username ="root";
$password ="";
$dbname ="hainan";

$conn = mysqli_connect($servername,$username,$password,$dbname);

//check conection
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
//echo "Connected successfully";
?>