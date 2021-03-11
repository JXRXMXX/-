<?php
include("connect.php");
$sql = "UPDATE movies SET
namem = '{$_POST['namem']}',
dayt = '{$_POST['dayt']}',
name = '{$_POST['name']}',
pin = '{$_POST['pin']}'
WHERE id = '{$_POST['id']}' ";
 if ($con->query($sql) === TRUE) {
    header("Location: show_table.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$conn->close();
?>