<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    *{
        font-family: 'Kanit', sans-serif;
        box-sizing: border-box;
    } 
    </style>
</head>
<body class="body2">
    <div class="container2" style="color: aliceblue;">
        <form action="login_check.php" method="post">
            <div align="center">
                <img src="images/logo.png" width="230">
                <h2 style="color: aliceblue;" >เข้าสู่ระบบ</h2>
                <h2 style="color: aliceblue;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สมาคมใหหนําแห่งประเทศไทย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
            </div>
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้:</label>
                <input type="text" id="username" name="username" class="input-style2 " required>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน:</label>
                <input type="password" id="password" name="password" class="input-style2 " required>
                <div class="form-group" style="color: red;">
                    <?php
                        if(isset($_SESSION["Error"])){
                            echo $_SESSION["Error"];
                        }
                    ?>
                </div>
            </div>
            
            <div align="center">
                <span >
                    <button type="submit" class="button-style2">เข้าสู่ระบบ</button>
                </span>&nbsp;&nbsp;
                <span >
                    <button type="button" class="button-style2" onclick="window.location.href='register.html'">สมัครสมาชิก</button>
                </span>
            </div>
        </form>
    </div>
</body>
</html>