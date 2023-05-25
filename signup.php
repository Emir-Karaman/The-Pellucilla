<?php


include "config.php";

$newuser_username = $_POST["username"];
$newuser_password = $_POST["upassword"];

if (empty($newuser_username) || empty($newuser_password)) {
    echo "Kullanıcı adı ve şifre girilmesi gerekmektedir.";
} else {

$islem = $db -> query("INSERT INTO users (username,password) VALUES ('".$newuser_username."', '".$newuser_password."')");

if ($islem == false)
{
    echo("Error description: " . $db -> error);
} else {
        echo "Kayıt başarılı!<br>";
        echo("Giriş yapmak için <a href='login_form.php'>tıklayınız.</a>");
    }
}


?>
