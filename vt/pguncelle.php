<?php
require("baglan.php");
if(empty($_SESSION["yoneticiadi"])){
    echo '<p>Bu sayfayı görmeye yetkiniz yok!!! Lütfen Giriş Yapınız!</p>';
    header("Refresh:3;url=giris.php");
    exit();
}
$id=$_GET["id"];
$sql="SELECT * FROM personel WHERE pid='$id'";
$sorgu=$baglan->query($sql);
$kgetir=$sorgu->fetchObject();
if($_POST)
{
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$memleket=$_POST["memleket"];
	$yas=$_POST["yas"];
	$sql="UPDATE personel SET ad='$ad',soyad='$soyad',memleket='$memleket',yas='$yas' WHERE pid=$id";
	$duzenle=$baglan->query($sql);
	if($duzenle)
	{
		echo "Düzenleme Başarılı";
		header("Refresh:1;url=goster.php");
	}
	else
	{
		echo "Düzenleme Başarısız";
	}
}
?>



<form action="" method="post">
<input type="text" name="ad" placeholder="isim gir" required value="<?php echo $kgetir->ad ?>"><br>
	<input type="text" name="soyad" placeholder="soyisim gir" required value="<?php echo $kgetir->soyad ?>"><br>
	<input type="text" name="memleket" placeholder="Memleket gir" required value="<?php echo $kgetir->memleket ?>"><br>
	<input type="text" name="yas" placeholder="yaş gir" required value="<?php echo $kgetir->yas ?>"><br>
<input type="submit" value="GÜNCELLE">
</form>