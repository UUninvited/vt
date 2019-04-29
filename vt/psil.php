<?php
require("baglan.php");
if(empty($_SESSION["yoneticiadi"])){
    echo '<p>Bu sayfayı görmeye yetkiniz yok!!! Lütfen Giriş Yapınız!</p>';
    header("Refresh:3;url=giris.php");
    exit();
}
$id=$_GET["id"];
$sql="DELETE FROM personel WHERE pid=$id";
$delete=$baglan->query($sql);
if($delete){
    echo 'Üye Başarıyla Silindi';
}else{
    echo 'Hata Oluştu Tekrar Deneyiniz';
}
header("Refresh:1;url=goster.php");
?>