
<!DOCTYPE html>
<html lang="en" class>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <?php
        $dateApply = $_POST["dateApply"];
        $timestamp = strtotime($dateApply);
        $dateApply = date("d F Y", $timestamp);
        
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

        $dateApply = str_replace(array_keys($thaiMonths), array_values($thaiMonths), $dateApply);

        $prefixSelect = $_POST["prefixSelect"];
        $nameThia = $_POST["nameThia"];
        $nameEng = $_POST["nameEng"];
        $sex = $_POST["sex"];
        $dateofbirth = $_POST["dateofbirth"];
        $timestamp = strtotime($dateofbirth);
        $dateofbirth = date("d F Y", $timestamp);
        $dateofbirth = str_replace(array_keys($thaiMonths), array_values($thaiMonths), $dateofbirth);
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $idcard = $_POST["idcard"];
        $registrarName = $_POST["registrarName"];
        $startdate = $_POST["startdate"];
        $timestamp = strtotime($startdate);
        $startdate = date("d F Y", $timestamp);
        $startdate = str_replace(array_keys($thaiMonths), array_values($thaiMonths), $startdate);
        $enddate = $_POST["enddate"];
        $timestamp = strtotime($enddate);
        $enddate = date("d F Y", $timestamp);
        $enddate = str_replace(array_keys($thaiMonths), array_values($thaiMonths), $enddate);
        $email = $_POST["email"];
        //ทะเบียนบ้าน
        $address = $_POST["address"];
        $village = $_POST["village"];
        $subdistrict = $_POST["subdistrict"];
        $district = $_POST["district"];
        $province = $_POST["province"];
        $postalCode = $_POST["postalCode"];
        $tel = $_POST["tel"];
        //การประกอบอาชีพ 
        $occupation = $_POST["occupation"];
        $position = $_POST["position"];
        $companyName = $_POST["companyName"];
        $addrcompany = $_POST["addrcompany"];
        $postalCodeCompany = $_POST["postalCodeCompany"];
        $telcompany = $_POST["telcompany"];
        //ภูมิลำเนาบรรพบุรุษ
        $addressDomicile = $_POST["addressDomicile"];
        $villageDomicile = $_POST["villageDomicile"];
        $subdistrictDomicile = $_POST["subdistrictDomicile"];
        $districtDomicile = $_POST["districtDomicile"];
        $provinceDomicile = $_POST["provinceDomicile"];
        $postalCodeDomicile = $_POST["postalCodeDomicile"];
        $fatherName = $_POST["fatherName"];
        $motherName = $_POST["motherName"];
        $pay = $_POST["pay"];
        //ส่วนสุดท้าย 
        $applyName = $_POST["applyName"];
        $certifierNumber = $_POST["certifierNumber"];
        $certifierName = $_POST["certifierName"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $targetDir = "images/"; // ตำแหน่งที่จะบันทึกไฟล์
            $targetFile = $targetDir . basename($_FILES["imageUpload"]["name"]); // เตรียมตำแหน่งของไฟล์ที่จะบันทึก
            // ตรวจสอบว่าไฟล์รูปถูกอัพโหลดหรือไม่
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
                if ($check !== false) {
                    // ไฟล์เป็นรูปภาพ
                    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $targetFile)) {
                        // อัพโหลดไฟล์สำเร็จ
                        //echo "<br><img src='$targetFile' alt='Uploaded Image'>";
                    } else {
                        echo "มีข้อผิดพลาดในการอัพโหลดไฟล์.";
                    }
                } else {
                    echo "ไฟล์ที่อัพโหลดไม่ใช่รูปภาพ.";
                }
            }
        }
    ?>
    <div class="container2">
        <div class="header">
            <TABLE align="center" WIDTH="880" BORDER="0" >
                <TR align="left" >
                    <TD WIDTH="350">
                        <div>
                            <h2 style="color: aliceblue;" >สมาคมใหหนําแห่งประเทศไทย</h2>
                        </div>
                    </TD> 
                    <TD ROWSPAN="2" WIDTH="200">
                        <div align="center">
                            <img src="images/logo.png" width="230">
                        </div>
                    </TD> 
                    <TD align="right">
                        <div>
                            <h2 style="color: aliceblue;">ใบสมัครสมาชิก</h2>
                        </div>
                    </TD>
                </TR> 
                <TR align="left"> 
                    <TD>
                        <div>
                            <h4 style="color: aliceblue;">324 ถนนสุรวงศ์ สี่พระยา บางรัก กรุงเทพฯ 10500</h4>
                            <h4 style="color: aliceblue;">โทรศัพท์ 02-631-5480     โทรสาร 02-233-9127</h4>
                        </div>
                    </TD> 
                    <TD align="right">
                        <div>
                            <?php

                            ?>
                            <img src="<?php echo $targetFile; ?>" alt="Uploaded Image" style="max-width: 150px; height: 150px;">
                        </div>
                    </TD> 
                </TR> 
            </TABLE>
        </div>
            <div align="right" >
                <label style="color: aliceblue; font-size:140%;">วันที่ &nbsp;&nbsp;</label>
                <label style="color: aliceblue; font-size:140%;"><?php echo $dateApply; ?> &nbsp;&nbsp;</label>
            </div>
            <HR>
            <div style="font-size: 20px; color: #fffdfd;">
                <label for="addr" style="font-size: 20px; color: #fffdfd;">ข้อมูลส่วนตัว</label><br><br>
                <label for="nameThia" style="color: aliceblue;">ข้าพเจ้า (ชื่อไทย) &nbsp;&nbsp;</label>
                <label for="nameThia" style="color: aliceblue;"class="underlined-text"><?php echo $prefixSelect;?><?php echo $_POST["nameThia"]; ?>&nbsp;&nbsp;</label>
                
                <label for="nameChaina"style="color: aliceblue;">&nbsp;&nbsp; ชื่ออังกฤษ &nbsp;&nbsp;&nbsp;</label>
                <label for="nameChaina" style="color: aliceblue;"class="underlined-text"><?php echo $nameEng;?>&nbsp;&nbsp;</label>
                
                <label for="sex"style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ </label>
                <label for="sex"style="color: aliceblue;"class="underlined-text"><?php echo $sex; ?><br><br></label>

                <label for="dateofbirth"style="color: aliceblue;">วัน/เดือน/ปี เกิด &nbsp;&nbsp;</label>
                <label for="dateofbirth"style="color: aliceblue;"class="underlined-text"><?php echo $dateofbirth;?></label>

                <label for="age"style="color: aliceblue;"> &nbsp;&nbsp; อายุ (Age) &nbsp;&nbsp;</label>
                <label for="age"style="color: aliceblue;"> &nbsp;&nbsp; <?php echo $age;?></label>

                <label for="nationality"style="color: aliceblue;"> &nbsp;&nbsp; สัญชาติ &nbsp;&nbsp;</label>
                <label for="nationality"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $nationality;?><br><br></label>

                <label for="idcard"style="color: aliceblue;">ถือบัตรประจำตัวประชาชน / ใบสำคัญต่างด้าว /บัตรชาราชการ  เลขที่  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="nationality"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $idcard;?><br><br></label>

                <label for="registrarName"style="color: aliceblue;">ซึ่งออกให้โดย &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="registrarName"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $registrarName;?></label>

                <label style="color: aliceblue; ">&nbsp;&nbsp; เมื่อวันที่ &nbsp;&nbsp;</label>
                <label for="startdate"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $startdate;?></label>

                <label style="color: aliceblue; ">&nbsp;&nbsp; สิ้นสุดวันที่ &nbsp;&nbsp;</label>
                <label for="enddate"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $enddate;?><br><br></label>

                <label style="color: aliceblue;">อีเมล &nbsp;&nbsp;</label>
                <label for="email"style="color: aliceblue;"class="underlined-text"> &nbsp;&nbsp; <?php echo $email;?><br></label>

            </div>
            <br>
            <HR>
            <div style="font-size: 20px; color: #fffdfd;">
                <label for="address" style="font-size: 20px; color: #fffdfd;">ที่อยู่ (ตามทะเบียนบ้าน)</label><br><br>
                <label for="address"style="color: aliceblue;">บ้านเลขที่  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="address"style="color: aliceblue;"class="underlined-text"><?php echo $address;?></label>


                <label for="village" style="color: aliceblue;">&nbsp;&nbsp;หมู่ &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="village"style="color: aliceblue;"class="underlined-text"><?php echo $village;?></label>

                <label for="subdistrict"style="color: aliceblue;">&nbsp;&nbsp;ตำบล &nbsp;&nbsp;</label>
                <label for="subdistrict"style="color: aliceblue;"class="underlined-text"><?php echo $subdistrict;?><br><br></label>

                <label for="district"style="color: aliceblue;">อำเภอ &nbsp;&nbsp;</label>
                <label for="district"style="color: aliceblue;"class="underlined-text"><?php echo $district;?></label>

                <label for="province"style="color: aliceblue;">&nbsp;&nbsp;จังหวัด &nbsp;&nbsp;</label>
                <label for="province"style="color: aliceblue;"class="underlined-text"><?php echo $province;?></label>
                
                <label for="postalCode"style="color: aliceblue;">&nbsp;&nbsp;รหัสไปรษณี &nbsp;&nbsp;</label>
                <label for="postalCode"style="color: aliceblue;"class="underlined-text"><?php echo $postalCode;?></label>
                
                <label for="tel"style="color: aliceblue;">&nbsp;&nbsp;โทรศัพท์มือถือ &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="tel"style="color: aliceblue;"class="underlined-text"><?php echo $tel;?></label>
                
            </div>
            <br>
            <HR>
            <div style="font-size: 20px; color: #fffdfd;">
                <label for="occupation" style="font-size: 20px; color: #fffdfd;">การประกอบอาชีพ</label><br><br>
                <label for="occupation"style="color: aliceblue;">อาชีพ  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="occupation"style="color: aliceblue;"class="underlined-text"><?php echo $occupation;?></label>
             
                <label for="position" style="color: aliceblue;">&nbsp;&nbsp;ตำแหน่ง &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="position"style="color: aliceblue;"class="underlined-text"><?php echo $position;?></label>
             
                <label for="companyName"style="color: aliceblue;">&nbsp;&nbsp;ชื่อบริษัท &nbsp;&nbsp;</label>
                <label for="telSend"style="color: aliceblue;"class="underlined-text"><?php echo $companyName;?><br><br></label>
             
                <label for="addrcompany"style="color: aliceblue;">ที่อยู่ที่ทำงาน &nbsp;&nbsp;</label>
                <label for="addrcompany"style="color: aliceblue;"class="underlined-text"><?php echo $addrcompany;?></label>
             
                <label for="postalCodeCompany"style="color: aliceblue;">&nbsp;&nbsp;รหัสไปรษณี &nbsp;&nbsp;</label>
                <label for="postalCodeCompany"style="color: aliceblue;"class="underlined-text"><?php echo $postalCodeCompany;?></label>
             
                <label for="telcompany"style="color: aliceblue;">&nbsp;&nbsp;โทรศัพท์ &nbsp;&nbsp;</label>
                <label for="telcompany"style="color: aliceblue;"class="underlined-text"><?php echo $telcompany;?></label>
             
            </div>
            <br>
            <HR>
            <div style="font-size: 20px; color: #fffdfd;">
                <label for="domicile" style="font-size: 20px; color: #fffdfd;">ภูมิลำเนาบรรพบุรุษ</label><br><br>

                <label for="addressDomicile">บ้านเลขที่  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="addressDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $addressDomicile;?></label>
             
                <label for="villageDomicile">&nbsp;&nbsp;หมู่ &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="villageDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $villageDomicile;?></label>
             
                <label for="subdistrictDomicile">&nbsp;&nbsp;ตำบล &nbsp;&nbsp;</label>
                <label for="subdistrictDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $subdistrictDomicile;?><br><br></label>
             
                <label for="districtDomicile">อำเภอ &nbsp;&nbsp;</label>
                <label for="districtDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $districtDomicile;?></label>
             
                <label for="provinceDomicile">&nbsp;&nbsp;จังหวัด &nbsp;&nbsp;</label>
                <label for="provinceDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $provinceDomicile;?></label>
             
                <label for="postalCodeDomicile">&nbsp;&nbsp;รหัสไปรษณี &nbsp;&nbsp;</label>
                <label for="postalCodeDomicile"style="color: aliceblue;"class="underlined-text"><?php echo $postalCodeDomicile;?><br><br></label>
             
                <label for="fatherName">ชื่อบิดา &nbsp;&nbsp;</label>
                <label for="fatherName"style="color: aliceblue;"class="underlined-text"><?php echo $fatherName;?></label>
             
                <label for="motherName">&nbsp;&nbsp;ชื่อมารดา &nbsp;&nbsp;</label>
                <label for="motherName"style="color: aliceblue;"class="underlined-text"><?php echo $motherName;?><br><br></label>
             
            </div>
            <div style="font-size: 20px; color: #fffdfd;">
                <label >ขอสมัครเป็นสมาชิกสมาคมประเภท และชำระค่าบำรุงสมาคม&nbsp;&nbsp;&nbsp;</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pay"style="color: aliceblue;">
                <?php 
                    if($pay === "600"){
                        echo '- สมาชิกสมทบลงทะเบียนครั้งแรกและบำรุงรักษาสมาคมรวม ' ;
                        echo $pay;
                        echo ' บาท' ;
                    }else{
                        echo '- สมาชิกสามัญลงทะเบียนครั้งแรกและบำรุงรักษาสมาคมรวม ';
                        echo $pay ;
                        echo ' บาท' ;
                    }
                ?>
                </label>
            </div>
            <br>
            <div>
                <div style="font-size: 20px; color: #fffdfd;"" align="center"" align="center">
                    <label for="document">
                    ข้าพเจ้าได้รับข้อบังคับของสมาคมฯและได้ทราบรายละเอียดในข้อบังคับโดยคลอดดีแล้วขอรับรองว่า 
                    จะยึดถือ<br>
                    และปฏิบัติตามระเบียบข้อบังคับของสมาคมฯ และกฎหมายของบ้านเมืองอย่างเคร่งครัด
                    </label></div><br>
            </div>
            <TABLE align="center" WIDTH="950" BORDER="0" style="font-size: 15px; color: #fffdfd;">
                <TR align="center" >
                    <TD ROWSPAN="3" WIDTH="50">
                        <div>
                        </div>
                    </TD> 
                    <TD align="left">
                        <div style="font-size: 20px; color: #fffdfd;">
                            <label for="applyName">ผู้สมัครชื่อ  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <label for="motherName"style="color: aliceblue;"class="underlined-text"><?php echo $_POST["applyName"];?></label>
                        </div>
                    </TD>
                </TR> 
                <TR align="left" BORDER="0"> 
                    <TD>
                        <div style="font-size: 20px; color: #fffdfd;">
                            <label for="certifierNumber">ผู้รับรองสมาชิกสามัญเลขที่&nbsp;</label>
                            <label for="motherName"style="color: aliceblue;"class="underlined-text"><?php echo $_POST["certifierNumber"];?></label>
                            <label for="certifierName2">ลงชื่อ&nbsp;&nbsp;</label>
                            <label for="motherName"style="color: aliceblue;"class="underlined-text"><?php echo $_POST["certifierName"];?></label>
                        </div>
                    </TD> 
                </TR> 
            </TABLE>
            <br><br>
            <div class="button" align="center">
                <a href="index.html" class="button-style">ยืนยันการสมัคร</a>
            </div>
    </div>   
</body>
</html>

