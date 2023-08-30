<?php
@session_start();
if (isset($_SESSION['girisyapti'])) {
    //giris yapildi
} else {
    header("location: login.php ");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Giriş sayfası</title>
</head>

<body>


    <div class="container text-center">
        <h1 class="text-center bg-light" style="padding:5px">PHP PDO ÖRNEĞİ</h1>
        <div class="row">
            <p><a href='list.php' class="btn btn-primary"> Kayıtları Listele </a></p>
            <p><a href='insert.php ' class="btn btn-primary"> Yeni Kullanıcı Ekle </a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>