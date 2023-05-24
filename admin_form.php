<?php
include "config.php";
echo"Admin girişi için:";
?>

<form action="admin.php" method="POST">
Kullanıcı Adı: <input type="text" name="username"><br>
Şifre: <input type="password" name="upassword"><br>
<input type="submit" name="submit" value="Giriş Yap!">
</form>