<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
        $_SESSION['email'] = htmlspecialchars($_POST['email']);
        $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
        $_SESSION['company'] = htmlspecialchars($_POST['company']);
        $_SESSION['message'] = htmlspecialchars($_POST['message']);

        header("Location: thank.php");
        exit();
    } else{
        echo "không có dữ liệu nào được gửi.";
    }
?>