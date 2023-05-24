<?php
include "config.php";

$form_movie_ID = $_POST["movie_ID"];
$form_movie_score = $_POST["movie_score"];

// Veriyi güncelleme
$sql = "UPDATE movies SET movie_score = '$form_movie_score' WHERE id = $form_movie_ID";

if ($db->query($sql) === TRUE) {
    echo "Veri güncelleme işlemi başarılı.<br>";
    
    echo "Ana sayfaya geçmek için <a href='admin.php'>tıklayınız</a>";
} else {
    echo "Veri güncelleme işlemi başarısız " ;
}

?>