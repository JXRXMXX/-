<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</head>
<?php
include("connect.php");
$sql = "SELECT * FROM movies";
$result = $con -> query($sql);
if(isset ($_GET['serach_click'])){
  $sql = "SELECT * FROM movies WHERE namem LIKE '%{$_GET['search']}%' ";// LIKE การหาทุกตัว
}
$result = $con->query($sql);//ดึงข้อมูล
?>
<body>
  <!-- ค้นหา -->
  <br>
<form action="login.php" method="get"  style="width: 20rem; margin-left: 2%;" >
 
    <div class="mb-3">
    <input type="hiden" class="form-control" name="search"   id="search" placeholder="ค้นหา">
    
    </div>
    <button type="submit" class="btn btn-primary" name="serach_click">ค้นหา</button>
    </form>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">รหัส</th>
      <th scope="col">ชื่อภาพยนต์</th>
      <th scope="col">วัน/เวลา</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">รหัสผ่าน</th>
      <th scope="col">รายการแก้ไข</th>


    </tr>
  </thead>
  <tbody>
<?php
     while($row = mysqli_fetch_array($result)) { 
?>
          <tr>
      <th scope="row"><?php echo $row["id"];?></th>
      <td><?php echo $row["namem"];?></td>
      <td><?php echo $row["dayt"];?></td>
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["pin"];?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="delete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">ลบ</button></a>
            <a href="update_form.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-warning">แก้ไข</button>
          </div>
      </td>
    </tr>
<?php
     }
?>
  </tbody>
</table>
<a href="insert_form.html"><button type="button" class="btn btn-primary">เพิ่ม</button></a>
<br>
      <form action="login.php" method="post">
     <button type="submit" name="logout" class="btn btn-success">ออกจากระบบ</button>
</body>
</html>