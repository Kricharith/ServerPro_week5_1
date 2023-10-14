<?php 
    include "condb.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passWordMd5 = md5($password);
    //ตรวจสอบตัวแปร _SESSION ก่อนว่ามีค่าว่างหรือไม่ 
    //  -ค่าว่างคือไม่มีการสมัครสมาชิกใหม่จึงไม่มีการเก็บตัวแปร_SESSION จึงใข้วิธีการ query จากฐานข้อมูลที่เก็บไว้
    //  -ค่าไม่ว่างว่างคือมีการสมัครสมาชิกใหม่ จะมีการเก็บค่า _SESSIONไว้ตอนกด submit ฟอร์ม และไปยังหน้า homepage ถ้าเป็นการเข้าสู่ระบบด้วยวิธีเก็บค่าคุกกี้จากการสมัครใหม่ หน้าhomepage จะแสดงคำว่า >> ยินดีต้อนรับสมาชิกใหม่ <<
    if (isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['namethai']) && isset($_SESSION['nameeng']) && isset($_SESSION['sex']) && isset($_SESSION['birthday']) && isset($_SESSION['age']) && isset($_SESSION['nationality']) && isset($_SESSION['idcard']) && isset($_SESSION['registrarame']) && isset($_SESSION['startdate']) && isset($_SESSION['enddate']) && isset($_SESSION['email']) && isset($_SESSION['address']) && isset($_SESSION['tel']) && isset($_SESSION['occupation']) && isset($_SESSION['position']) && isset($_SESSION['companyname']) && isset($_SESSION['addrcompany']) && isset($_SESSION['telcompany']) && isset($_SESSION['membertype']) && isset($_SESSION['imagefile'])&& isset($_SESSION['priority'])) {
        // echo "SESSION ไม่ว่าง";
        if($username == $_SESSION['username'] && $passWordMd5 == $_SESSION['password']){
            $show=header("location:homepage.php");
        }else{
            $_SESSION["Error"] = "<p?> Your username or password is invali </p>";
            $show=header("location:index.php");
        }
        echo $show;
    }else {
        // echo "SESSION ว่าง";
        $sql = "SELECT * FROM `member` WHERE username = '$username' AND password = '$passWordMd5'; ";
        $result= $conn->query($sql);
        $row =mysqli_fetch_array($result);
        if($row > 0){
            // echo "pass";
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
            $_SESSION["priority"] = "accountOld";
            $show=header("location:homepage.php");
        }else{
            $_SESSION["Error"] = "<p?> Your username or password is invali </p>";
            $show=header("location:index.php");
        }
        echo $show;
    }
?>
