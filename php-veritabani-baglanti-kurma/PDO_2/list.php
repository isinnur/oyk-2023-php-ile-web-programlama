<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<title>Kayıtlı kullanıcılar</title>
</head>

<body>


    <h1 class="text-center bg-light" style="padding:5px">KAYITLI KULLANICILAR</h1>

    <div class="container p-3 bg-light text-center">
        <?php

        require_once('db.php');

        $SORGU = $DB->prepare("SELECT id, name, email FROM users");
        $SORGU->execute();
        $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
        //echo '<pre>'; print_r($users);

        foreach ($users as $user) {
            echo "<div class='card' >
            <span style='padding:7px' class='bg-white card-text text-dark '> <span class='text-primary'> {$user['id']}:</span>  {$user['name']}, {$user['email']}</span> 
            </div> ";
            echo "<a style='margin:5px' class=' btn btn-secondary' href='update.php?id={$user['id']}'>Güncelle</a>";
            echo "<a style='margin:5px' class='btn btn-secondary' href='delete.php?id={$user['id']}' >Sil</a>";
            echo "<br>";
        }

        echo "<p><a  href='index.php' class='mt-3 btn btn-primary' >ANASAYFAYA DÖN</a></p>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>