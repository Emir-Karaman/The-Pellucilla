<?php
include "config.php";

$form_movie_ID = $_POST["movie_ID"];

$sql = "DELETE FROM movies WHERE id = $form_movie_ID";

if ($db->query($sql) === TRUE) {
    echo "filmi silme işlemi başarılı.<br>";
    echo "Ana sayfaya geçmek için <a href='admin.php'>tıklayınız</a>";
} else {
    echo "Veri silme işlemi başarısız " ;
}

?>