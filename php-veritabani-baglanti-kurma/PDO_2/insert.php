<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<h1 class="text-center bg-light" style="padding:5px">KAYIT EKLEME FORMU</h1>
<div class="container">

    <form method='POST' class="card p-3 mb-2 bg-light " style="padding:3rem" ;>
        <p class="text-dark">User Name: <input type='text' name='name' class="form-control bg"></p>
        <p class="text-dark">User Email: <input type='text' name='email' class="form-control"></p>
        <p><input class="btn btn-secondary" type='submit' value='EKLE'></p>
    </form>

    <p><a href='index.php' class='mt-3 btn btn-primary'>ANASAYFAYA DÖN</a></p>
</div>

<?php

if (isset($_POST['name'])) {

    require_once('db.php');

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':name',  $name);
    $SORGU->bindParam(':email', $email);

    $SORGU->execute();
    echo "User created";
}
