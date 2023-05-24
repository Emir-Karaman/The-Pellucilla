<?php

include "config.php";
$sql = "SELECT * FROM movies";
$result = $db->query($sql);

if (isset($_POST["movie_name"]))
{
    $form_movie_name = $_POST["movie_name"];
    $form_movie_score = $_POST["movie_score"];

    $rt = mysqli_query($db, "INSERT INTO `movies` (`movie_name`, `movie_score`) VALUES ('".$form_movie_name."', '".$form_movie_score."')");

    if(mysqli_errno($db) != 0)
    {
        echo "Bir hata meydana geldi!";
        exit;
    }

    echo "Film eklemeniz başarılı!<br>";
    echo "Film listesini görüntülemek için <a href='movie_list.php'>tıklayınız<br></a>";   
    echo "Ana sayfaya geçmek için <a href='index.php'>tıklayınız</a>";
}
else
{
?>
<?php
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
            echo "ID: " . $id . "<b> / </b><font color=#7704C1>  Film Adı : </font>" . $movieName . "<b> / </b><font color=#7704C1>  Filmin Puanı : </font> " . $averageScore . "<br> <br>";
        }
    } else {
        echo "Hiç film bulunamadı.";
    }
} else {
    echo "Tabloda veri bulunamadı.";
}
?>

<form action="add_movie.php" action="movie_list.php" method="POST">
    Film adı: <input type="text" name="movie_name"><br>
    Film puanı: <input type="text" name="movie_score"><br>

    <button type="submit">Filmi puanla/ekle!</button>
    <?php
    echo "<br><br>Ana sayfaya geçmek için <a href='index.php'>tıklayınız</a>";
    ?>
<form>

<?php
}
?>