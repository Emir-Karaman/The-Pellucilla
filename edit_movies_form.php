<?php
include "config.php";
$sql = "SELECT * FROM movies";
$result = $db->query($sql);

// Verileri ekrana yazdırma
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<b> / </b><font color=#C10404>  Film Adı : </font>" . $row["movie_name"] . "<b> / </b><font color=#D3D013>  Filmin Puanı : </font> " . $row["movie_score"] . "<br> <br>";
        // Tablodaki diğer sütunları da ekleyebilirsiniz
    }
    echo "Ana sayfaya geçmek için <a href='admin.php'>tıklayınız</a>";
} else {
    echo "Tabloda veri bulunamadı.";
}
?>

<form action="edit_movies.php" action="movie_list.php" method="POST">
    Puanı değişecek filmin ID: <input type="text" name="movie_ID"><br>
    Filmin yeni puanı: <input type="text" name="movie_score"><br>

    <button type="submit">Filmi düzenle!</button>
<form>