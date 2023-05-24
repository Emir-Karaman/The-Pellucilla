<?php

include "config.php";

    $username = $_POST["username"];
    $upassword = $_POST["upassword"];
    
    $result = $db -> query("SELECT * FROM users WHERE username='$username' AND password='$upassword' LIMIT 1");
    
    $lines = $result->num_rows;
    
    if($username=='emir' && $upassword=='888')
    {
    $line = $result->fetch_assoc();
    $_SESSION["id"] = $line["id"];
    $_SESSION["username"] = $line["username"];

    header("Location: admin.php");
    }

    echo("Kullanıcı bulunamadı!<br>");
    die("Şifrenizi ve kullanıcı adınızı kontrol adiniz tekrar <a href='login_form.php'>deneyiniz.");

?>