<?php
include 'condb.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" class>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="validation.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>ฟอร์มสมัครสมาชิก สมาคมใหหนําแห่งประเทศไทย</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    *{
        font-family: 'Kanit', sans-serif;
        box-sizing: border-box;
    } 
    </style>
</head>
<body >
    <div class="container">
        <div class="header">
            <TABLE align="center" WIDTH="950" BORDER="0" >
                <TR align="left" >
                    <TD width="450">
                        <div class="container2"style="height: 600px; ">
                            <form id="form"  action="show.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div style="font-size: 15px; color: #fffdfd;">
                                    <p class="fs-1" style="color: aliceblue; font-size: 20px;"align="center">การค้นหาข้อมูล</p>
                                    <input type="radio" name="choice" id="choice" value="1" required>&nbsp;&nbsp;&nbsp;1.แสดงข้อมูลทุกเรคคอร์ด<br><br>
                                    <input type="radio" name="choice" id="choice" value="2"required>&nbsp;&nbsp;&nbsp;2.แสดงข้อมูลสมาชิกที่มีอายุ40ปีขึ้นไป<br><br>
                                    <input type="radio" name="choice" id="choice" value="3" required>&nbsp;&nbsp;&nbsp;3.แสดงข้อมูลสมาชิก เพศชายและมีอายุมากกว่าหรือเท่ากับ 30 ปี<br><br>
                                    <input type="radio" name="choice" id="choice" value="4"required>&nbsp;&nbsp;&nbsp;4.แสดงข้อมูลสมาชิก ที่เกิดระหว่างปี 1980 ถึง 1990<br><br>
                                    <input type="radio" name="choice" id="choice" value="5" required>&nbsp;&nbsp;&nbsp;5.แสดงข้อมูลสมาชิกที่ไม่มีเบอร์โทรศัพท์<br><br>
                                    <input type="radio" name="choice" id="choice" value="6"required>&nbsp;&nbsp;&nbsp;6.แสดงข้อมูลสมาชิกที่มีเบอร์โทรศัพท์<br><br>
                                    <input type="radio" name="choice" id="choice" value="7" required>&nbsp;&nbsp;&nbsp;7.แสดงข้อมูลสมาชิกที่ ที่อยู่จังหวัดชลบุรี <br><br>
                                    <input type="radio" name="choice" id="choice" value="8"required>&nbsp;&nbsp;&nbsp;8.แสดงข้อมูลสมาชิกที่ ที่อยู่ไม่ได้อยู่จังหวัดชลบุรี<br><br>
                                    <input type="radio" name="choice" id="choice" value="9" required>&nbsp;&nbsp;&nbsp;9.แสดงข้อมูลสมาชิกที่มีอาชีพช่างไฟฟ้าและนักธุรกิจ<br><br>
                                    <input type="radio" name="choice" id="choice" value="10"required>&nbsp;&nbsp;&nbsp;10.แสดงข้อมูลของบริษัททั้งหมดที่ไม่ซ้ำกัน<br><br>
                                </div>
                                <div align="center" >
                                    <input type="submit" value="ค้นหา"name="submit" class="button-style" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="button-style" onclick="window.location.href='logout.php'">ออกจากระบบ</button>
                                </div>
                                
                            </form>
                        </div>
                    </TD>
                    <TD ROWSPAN="2" WIDTH="10">

                    </TD> 
                    <TD width="450" >
                        <div class="container2" style="height: 600px; font-size: 20px;">
                            <?php 
                            $timestamp = strtotime($_SESSION["birthday"]);
                            $birthday = date("d F Y", $timestamp);
                            
                            // แปลงเดือนเป็นภาษาไทย
                            $thaiMonths = array(
                                'January' => 'มกราคม',
                                'February' => 'กุมภาพันธ์',
                                'March' => 'มีนาคม',
                                'April' => 'เมษายน',
                                'May' => 'พฤษภาคม',
                                'June' => 'มิถุนายน',
                                'July' => 'กรกฎาคม',
                                'August' => 'สิงหาคม',
                                'September' => 'กันยายน',
                                'October' => 'ตุลาคม',
                                'November' => 'พฤศจิกายน',
                                'December' => 'ธันวาคม'
                            );
                    
                            $birthday = str_replace(array_keys($thaiMonths), array_values($thaiMonths), $birthday);
                    
                            ?>
                            <p class="fs-1" style="color: aliceblue; "align="center">โปรไฟล์ของฉัน</p>
                            <div align="center">
                                <img src="<?php echo "images/".$_SESSION["imagefile"] ?>" alt="Uploaded Image" style="max-width: 150px; height: 150px;">
                            </div>
                            <br>
                            <label for="nameThia" style="color: aliceblue;">ชื่อ &nbsp;&nbsp;</label>
                            <label for="nameThia" style="color: aliceblue;"><?php echo $_SESSION["namethai"]; ?>&nbsp;&nbsp;</label>
                            <br>
                            <label for="nameChaina"style="color: aliceblue;">ชื่ออังกฤษ &nbsp;&nbsp;&nbsp;</label>
                            <label for="nameChaina" style="color: aliceblue;"><?php echo $_SESSION["nameeng"];?>&nbsp;&nbsp;</label>
                            <br>
                            <label for="sex"style="color: aliceblue;">เพศ </label>
                            <label for="sex"style="color: aliceblue;"><?php echo $_SESSION["sex"]; ?></label>
               
                            <label for="age"style="color: aliceblue;"> &nbsp;&nbsp; อายุ</label>
                            <label for="age"style="color: aliceblue;"> &nbsp;&nbsp; <?php echo $_SESSION["age"];?></label>
                            
                            <label for="nationality"style="color: aliceblue;"> &nbsp; สัญชาติ </label>
                            <label for="nationality"style="color: aliceblue;"> &nbsp; <?php echo $_SESSION["nationality"];?></label>

                            <br>
                            <label for="dateofbirth"style="color: aliceblue;">วัดเกิด &nbsp;&nbsp;</label>
                            <label for="dateofbirth"style="color: aliceblue;"><?php echo $birthday;?></label>
                            <br>
                            <label for="dateofbirth"style="color: aliceblue;">ที่อยู่&nbsp;&nbsp;</label>
                            <label for="dateofbirth"style="color: aliceblue;"><?php echo $_SESSION["address"];?></label>
                        </div>
                        

                    </TD>
                </TR> 
            </TABLE>
        </div>
        
    </div>  
</body>
</html>