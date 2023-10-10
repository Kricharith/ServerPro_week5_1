<?php 
include "condb.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// if(strlen($password) < 20) {
//     $password = $_POST['password'];
// }else if(strlen($password) > 20){
//     $password = hash('sha512', $password);
//     echo $password;
// }


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
    $_SESSION["sex"] = $row['sex'];
    $_SESSION["birthday"] = $row['birthday'];
    $_SESSION["age"] = $row['age'];
    $_SESSION["nationality"] = $row['nationality'];
    $_SESSION["idcard"] = $row['idcard'];
    $_SESSION["registrarame"] = $row['registrarame'];
    $_SESSION["startdate"] = $row['startdate'];
    $_SESSION["enddate"] = $row['enddate'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["address"] = $row['address'];
    $_SESSION["tel"] = $row['tel'];
    $_SESSION["occupation"] = $row['occupation'];
    $_SESSION["position"] = $row['position'];
    $_SESSION["companyname"] = $row['companyname'];
    $_SESSION["addrcompany"] = $row['addrcompany'];
    $_SESSION["telcompany"] = $row['telcompany'];
    $_SESSION["membertype"] = $row['membertype'];
    $_SESSION["imagefile"] = $row['imagefile'];
    $show=header("location:homepage.php");
}else{
    $_SESSION["Error"] = "<p?> Your username or password is invali </p>";
    $show=header("location:index.php");
}
echo $show;
?>