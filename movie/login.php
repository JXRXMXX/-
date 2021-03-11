<?php
    include("connect.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movies WHERE id = '{$_POST['id']}' AND pin = '{$_POST['pin']}'";
        $result = $con->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["id"] = $row['id'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();
        header("Location: login_form.php");
    }

    if(isset($_SESSION['id'])) {
     require_once("show_table.php");
    } else {
        require_once("login_form.php");
    }
?>
