<?php
include("connect.php");

$query =  "INSERT INTO movies (id, namem, dayt, name, pin)
VALUES ('{$_POST['id']}', '{$_POST['namem']}', '{$_POST['dayt']}', '{$_POST['name']}', '{$_POST['pin']}')";
$result = mysqli_query($con,$query);
if($result == TRUE){
 header("Location: show_table.php");
}else{
echo "ไม่สามารถเพิ่มรายชื่อได้";
}

?>