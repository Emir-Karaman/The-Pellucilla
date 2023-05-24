<?php

include "config.php";
$_SESSION["admingirisyapti"] = "0";
session_unset();
session_destroy();
session_start();
session_regenerate_id(true);

header("Location: index.php");
?>



