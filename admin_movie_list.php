<?php

include "config.php";
$sql = "SELECT * FROM movies";
$result = $db->query($sql);

// Verileri ekrana yazdırma
if ($result->num_rows > 0) {

    // Her bir film için puan ortalamalarını ve ID'lerini al
    $sql = "SELECT id, movie_name, AVG(movie_score) AS average_score FROM movies GROUP BY movie_name";
    $result = $db->query($sql);

    // Sonuçları ekrana yazdır
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $movieName = $row["movie_name"];
            $averageScore = $row["average_score"];
            echo "ID: " . $id . "<b> / </b><font color=#C10404>  Film Adı : </font>" . $movieName . "<b> / </b><font color=#D3D013>  Filmin Puanı : </font> " . $averageScore . "<br> <br>";
        }
    } else {
        echo "Hiç film bulunamadı.";
    }
    echo "Ana sayfaya geçmek için <a href='admin.php'>tıklayınız</a>";
} else {
    echo "Tabloda veri bulunamadı.";
}

?>