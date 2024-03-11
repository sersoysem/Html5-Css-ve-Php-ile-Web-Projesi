<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "dogayikoru";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Veritabanı Bağlantı İşlemi Başarısız. " . mysqli_connect_error());
}
?>
