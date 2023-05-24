<?php

include "config.php";

        $username = $_POST["username"];
        $upassword = $_POST["upassword"];
        
        $result = $db -> query("SELECT * FROM users WHERE username='$username' AND password='$upassword' LIMIT 1");
        
        $lines = $result->num_rows;
        
        if($lines == 0)
        {
            echo("Kullanıcı bulunamadı!<br>");
            die("Şifrenizi ve kullanıcı adınızı kontrol adiniz tekrar <a href='login_form.php'>deneyiniz</a>.Yada yeni hesap oluşturmak için <a href='signup_form.php'>tıklayınız.</a>");
        }
        
        
        $line = $result->fetch_assoc();
        
        $_SESSION["id"] = $line["id"];
        $_SESSION["username"] = $line["username"];
        
        header("Location: index.php");

?>

