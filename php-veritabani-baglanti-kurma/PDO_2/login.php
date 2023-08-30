<h1>GİRİŞ EKRANI</h1>

<form method='POST' class="card p-3 mb-2 bg-light " style="padding:3rem" ;>
    <p>Email: <input type='text' name='eposta'></p>
    <p>Parola: <input type='text' name='parola'></p>
    <p><input class="btn btn-secondary" type='submit' value='EKLE'></p>
</form>


<?php

if (isset($_POST['eposta'])) {
    require_once('db.php');


    $sql = "SELECT * FROM users WHERE email= :eposta AND  parola= :parola";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':eposta', $_POST['eposta']);
    $SORGU->bindParam(':parola', $_POST['parola']);


    $SORGU->execute();


    $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($CEVAP);
    // echo ""

    if (count($CEVAP) == 1) {
        echo "
        <h1>giriş oldu</h1>
        ";
        @session_start();

        $_SESSION['girisyapti'] = 1;
        $_SESSION['adi'] = $CEVAP[0]['name'];  //kullanıcının adını al
        $_SESSION['id'] = $CEVAP[0]['id'];  //kullanıcı id al
        header("location: index.php");
        die();
    } else {
        echo "
        <h1>HATALIIIII</h1>
        ";
    }
}
