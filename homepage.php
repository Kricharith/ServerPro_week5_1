<?php
include 'condb.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
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
    <form id="form" class="form" action="show.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div style="font-size: 15px; color: #fffdfd;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="1" required>&nbsp;&nbsp;&nbsp;ข้อ1
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="2"required>&nbsp;&nbsp;&nbsp;ข้อ2
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="3" required>&nbsp;&nbsp;&nbsp;ข้อ3
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="4"required>&nbsp;&nbsp;&nbsp;ข้อ4
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="5" required>&nbsp;&nbsp;&nbsp;ข้อ5
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="6"required>&nbsp;&nbsp;&nbsp;ข้อ6
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="7" required>&nbsp;&nbsp;&nbsp;ข้อ7
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="8"required>&nbsp;&nbsp;&nbsp;ข้อ8
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="9" required>&nbsp;&nbsp;&nbsp;ข้อ9
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="choice" id="choice" value="10"required>&nbsp;&nbsp;&nbsp;ข้อ10
        </div>
        <input type="submit" value="ค้นหา"name="submit" class="button-style">
    </form>
        <H2>homepage</H2>
        <div>
            <?php
                echo $_SESSION["namethai"];
                echo $_SESSION["nameeng"];
                echo $_SESSION["age"];
            ?>
            <?php
                $sql = 'SELECT namethai, age, email FROM member ';
                $result = $conn->query($sql);
                if (!$result) {
                    echo $mysqli->error;
                    goto end_page;
                } else if ($result->num_rows == 0) {
                    echo 'ไม่มีข้อมูลในตาราง people';
                    goto end_page;
                } 

                echo <<<HTML
                <table class="table table-sm table-striped">
                    <caption>ข้อมูลจากตาราง people</caption>
                    <thead class="thead-dark">
                    <tr>
                HTML;
                //แสดงแถวหัวตาราง
                $field_count =  $result->field_count;
                for($i = 0; $i < $field_count; $i++) {
                    $field = $result->fetch_field_direct($i);
                    echo '<th>' . $field->name . '</th>';
                }
                echo '</tr></thead>';

                //อ่านข้อมูลที่ละแถวจาก result set ในแบบออบเจ็กต์
                while ($data = $result->fetch_object()) {
                    echo <<<HTML
                    <tr>
                            <td>$data->namethai</td>
                            <td>$data->age</td>
                            <td>$data->email</td>
                    </tr>
                    HTML;
                }
                echo '</table>';

                end_page:
                mysqli_close($conn);
                ?>
            
        </div>
        <div>
            <button type="button" class="button-style2" onclick="window.location.href='logout.php'">ออกจากระบบ</button>
        </div>
    </div>
</body>
</html>

    <!-- <td scope="col">$data->id</td>
    <td>$data->username</td>
    <td>$data->password</td>
    <td>$data->dateapply</td>
    <td>$data->namethai</td>
    <td>$data->nameeng</td>
    <td>$data->sex</td>
    <td>$data->birthday</td>
    <td>$data->age</td>
    <td>$data->nationality</td>
    <td>$data->idcard</td>
    <td>$data->registrarame</td>
    <td>$data->startdate</td>
    <td>$data->enddate</td>
    <td>$data->email</td>
    <td>$data->tel</td>
    <td>$data->occupation</td>
    <td>$data->position</td>
    <td>$data->companyname</td>
    <td>$data->addrcompany</td>
    <td>$data->telcompany</td>
    <td>$data->membertype</td>
    <td>$data->imagefile</td> -->
