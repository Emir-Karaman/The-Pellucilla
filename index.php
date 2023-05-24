<?php
include "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>THE PELLUCİLLA</title>
</head>
<body>
    <h1>THE PELLUCİLLA</h1><br>
    <a>Film puanlama sitesi</a><br><br>
    <?php
    

    if ($theuser) {
        
    ?>
            <a>Hoşgeldiniz <?php echo $theuser["username"]; ?> </a>
            |
            <a href="logout.php">Çıkış Yap (#<?php echo $_SESSION["id"]; ?>)</a>

            <br><br><br>

            <h3><a href="add_movie.php"> Film Puanla/Ekle</a></h3>

            <h2><u><a href="movie_list.php">Film Listesi </a></u></h2>
            <?php
        }
     else {
        ?>
        <a href="signup_form.php">Kayıt Ol<br><br></a>
        <a href="login_form.php">Giriş Yap<br><br><br><br><br></a>
        <a href="https://github.com/Emir-Karaman?tab=repositories">Github linki</a>
        <?php
    }
    ?> 
</body>
</html>


