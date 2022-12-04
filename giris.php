<?php

if (isset($_POST['submit'])){

    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    if(!$kullanici_adi || !$sifre){
        $hata = 'Lutfen kullanıcı adi ya da  sifrenizi giriniz';
    } elseif ($kullanici_adi != $uye['kullanici_adi']){
        $hata = 'Kullanıcı adınız hatalı.';
    } elseif ($sifre != $uye['sifre']){
        $hata = 'Sifreniz hatalı.';
    } else {


    } 
}


?>

<?php if (isset($hata)):  ?>
    <div style="border: 1 px solid red">
        <?php echo $hata; ?>
    </div>
<?php endif; ?>

<form action="" method="post">
Kullanıcı adı: <br>
<input type="text" name="kullanici_adi">
<hr>
Şifre: <br>
<input type="password" name="sifre"><br>
<input type="hidden" name="submit" value="1">
<button type="submit">Giriş Yap</button>
</form>