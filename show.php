<?php
include 'condb.php';
session_start();
$choice = $_POST["choice"];   
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" description="IE=edge">
      <meta name="viewport" description="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="styles.css">
      <title>Show data</title>
</head>
<body class="body2">
      <div class="" style="color: aliceblue;" >
      <?php
         if($choice === '1'){
            // echo $choice;
            // echo $_SESSION["namethai"];
            // echo $_SESSION["nameeng"];
            // echo $_SESSION["age"];

            $sql = 'SELECT * FROM member ';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>


                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page:
            mysqli_close($conn);
                
         }else if($choice === '2'){
            $sql = 'SELECT * FROM member WHERE age > 40';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page1;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page1;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped ">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page1:
            mysqli_close($conn);
         }else if($choice === '3'){
            $sql = 'SELECT * FROM member WHERE sex = "ชาย" AND age >= 30';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page2;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page2;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page2:
            mysqli_close($conn);
         }else if($choice === '4'){
            $sql = 'SELECT * FROM member WHERE sex = "ชาย" AND age >= 30';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page3;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page3;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page3:
            mysqli_close($conn);
         }else if($choice === '5'){
            $sql = 'SELECT * FROM member WHERE tel IS NULL';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page4;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page4;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page4:
            mysqli_close($conn);
         }else if($choice === '6'){
            $sql = 'SELECT * FROM member WHERE tel IS NOT NULL';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page5;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page5;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page5:
            mysqli_close($conn);
         }else if($choice === '7'){
            $sql = 'SELECT * FROM member WHERE address LIKE "%ชลบุรี%"';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page6;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page6;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page6:
            mysqli_close($conn);
         }else if($choice === '8'){
            $sql = 'SELECT * FROM member WHERE address NOT LIKE "%ชลบุรี%"';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page7;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page7;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page7:
            mysqli_close($conn);
         }else if($choice === '9'){
            $sql = 'SELECT * FROM member WHERE occupation IN ("ช่างไฟฟ้า","นักธุรกิจ")';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page8;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page8;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped">
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
                        <td>$data->id</td>
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
                        <td>$data->address</td>
                        <td>$data->tel</td>
                        <td>$data->occupation</td>
                        <td>$data->position</td>
                        <td>$data->companyname</td>
                        <td>$data->addrcompany</td>
                        <td>$data->telcompany</td>
                        <td>$data->membertype</td>
                        <td>$data->imagefile</td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page8:
            mysqli_close($conn);
         }else if($choice === '10'){
            $sql = 'SELECT DISTINCT companyname FROM member';
            $result = $conn->query($sql);
            if (!$result) {
                  echo $mysqli->error;
                  goto end_page9;
            } else if ($result->num_rows == 0) {
                  echo 'ไม่มีข้อมูลในตาราง people';
                  goto end_page9;
            } 
            echo <<<HTML
                  <div align ="center">
                  <p class="fs-1">ตาราง</p>
                  </div>
            HTML;
            echo <<<HTML
            <table class="table table-bordered table-striped custom-table">
                  <thead class="thead-dark">
                  <tr>
            HTML;
            //แสดงแถวหัวตาราง
            $field_count =  $result->field_count;
            for($i = 0; $i < $field_count; $i++) {
                  $field = $result->fetch_field_direct($i);
                  echo '<th >' . $field->name . '</th>';
            }
            echo '</tr></thead>';

            //อ่านข้อมูลที่ละแถวจาก result set ในแบบออบเจ็กต์
            while ($data = $result->fetch_object()) {
                  echo <<<HTML
                  <tr>  
                        <td>$data->companyname </td>
                  </tr>
                  HTML;
            }
            echo '</table>';
            end_page9:
            mysqli_close($conn);
         }
      ?>
      <br>
      <div>
            <button type="button" class="btn btn-primary" onclick="window.location.href='homepage.php'">ย้อนกลับ</button>
      </div>
      </div>
      
</body>
</html>
