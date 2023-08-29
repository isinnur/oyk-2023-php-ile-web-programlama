<?php
// KAYIT LİSTELEME 
$SORGU = $DB->prepare("SELECT id, name, email FROM users");
$SORGU->execute();
$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}