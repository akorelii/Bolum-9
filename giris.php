<?php

if (isset($_POST['submit'])){

    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    if(!$kullanici_adi || !$sifre){
        $hata = 'Lütfen kullanıcı adi ya da  sifrenizi giriniz';
    } elseif ( $kullanici_adi != $uye['kullanici_adi']){
        $hata = 'Kullanıcı adınız hatalı.';
    } elseif ( $sifre != $uye['sifre']){
        $hata = 'Şifreniz hatalı.';
    } else {

        $_SESSION['zaman'] = time() + 10;
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        
        //header() -> yonlendırme icin, ilerde detaylı gorulecek
        header('Location:/bolum-9');

    } 
}

?>

<?php if (isset($hata)):  ?>
    <div style="background-color: red; color: black; padding: 2px;">
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