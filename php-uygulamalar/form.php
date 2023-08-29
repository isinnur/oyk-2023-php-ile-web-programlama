<?php
//form gönderildiyse işlemleri yap
if(isset($_POST['isim'])){
echo "Girilen ad : " . $_POST['isim'];

//uygulamayı sonlandırır
die();
}

?>


<form action="" method="post">
    <div>
        <label for="email">İsim:</label>
        <input type="text" id="text" name="isim" />
    </div>
    <button type="submit">Submit</button>
</form>