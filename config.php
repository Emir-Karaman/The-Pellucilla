<?php
session_start();

$db = new mysqli("localhost","root","","epiz_34249158_film");


if ($db -> connect_errno)
{
    echo("Bir hata meydana geldi!");
    exit;
}

$theuser = false;

if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
{
    $getuserquery = $db -> query("SELECT * FROM users WHERE id=".$_SESSION["id"]);
    $theuser = $getuserquery -> fetch_assoc();
}


?>