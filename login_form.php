<?php
include "config.php";
echo("Admin girişi yapmak için <a href='admin_form.php'>tıklayınız</a><br>");
?>

<form action="login.php" method="POST">
Kullanıcı Adı: <input type="text" name="username"><br>
Şifre: <input type="password" name="upassword"><br>
<input type="submit" name="submit" value="Giriş Yap!">
</form>