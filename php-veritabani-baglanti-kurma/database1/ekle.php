<link rel="stylesheet" type="text/css" href="style.css" />
<form action="" method="post">
    <div class="container">
        <h1>P</h1>
        <div class="form" >
        ADI: <input type="text" name="adi"> <br> <br>
        E-POSTA: <input type="text" name="eposta"> <br><br>
        <input  type="submit" value="KAYIT EKLE"> <br>
        </div>
    </div>
</form>

<?php

if(isset($_POST['adi'])){

    //önce bağlanır
    require "baglan.php";

    //kayıt ekleme
    //inputa yazdığımız isim ve espostayı alır
    $name  = $_POST['adi'];
    $email =  $_POST['eposta'];
    
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $SORGU = $DB->prepare($sql);
    
    $SORGU->bindParam(':name', $name);
    $SORGU->bindParam(':email', $email);
    
    $SORGU->execute();
    echo "KULLANICI EKLEDİ!!!";
}