<?php 
include "condb.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
if($password >20){
    $password = $_POST['password'];
}else{
    $password = hash('sha512',$password);
}

echo $password;
$sql = "SELECT * FROM `member` WHERE username = '$username' AND password = '$password'; ";
//$sql = "SELECT *FROM member";
$result= $conn->query($sql);

$row =mysqli_fetch_array($result);
if($row > 0){
    echo "pass";
    $_SESSION["username"] = $row['username'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["namethai"] = $row['namethai'];
    $_SESSION["nameeng"] = $row['nameeng'];
    $_SESSION["age"] = $row['age'];
    $show=header("location:homepage.php");
}else{
    $_SESSION["Error"] = "<p?> Your username or password is invali </p>";
    $show=header("location:index.php");
}
//echo $show;
?>