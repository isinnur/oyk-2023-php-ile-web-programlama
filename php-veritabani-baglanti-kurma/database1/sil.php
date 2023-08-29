<link rel="stylesheet" type="text/css" href="style.css" />
<form action="" method="post">
    <div class="container">
        <h1>silme</h1>
        <div class="form" >
        silinecek id <input type="text" name="sil_id"> <br> <br>
        <input  type="submit" value="sill!!"> <br>
        </div>
    </div>
</form>

<?php

if(isset($_POST['sil_id'])) {
    //tekrar bağlanıyoruz
    require "baglan.php";
    $id    = $_POST['sil_id'];

$sql = "DELETE FROM users WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "Kullanıcı silindi";
}