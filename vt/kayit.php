<html>
<head>
	<title>Kayıt Ol!</title>
</head>
<body>
<a href="giris.php">Admin girişi</a>
<form action="" method="get">
	<input type="text" name="ad" placeholder="isim gir" required><br>
	<input type="text" name="soyad" placeholder="soyisim gir" required><br>
	<input type="text" name="memleket" placeholder="Memleket gir" required><br>
	<input type="text" name="yas" placeholder="yaş gir" required><br>
	<input type="submit" value="Gönder">
</form>

<?php
require("baglan.php");
if($_GET)
{
$ad=$_GET["ad"];
$soyad=$_GET["soyad"];
$memleket=$_GET["memleket"];
$yas=$_GET["yas"];

$sql="INSERT INTO personel SET 
              ad='$ad',
              soyad='$soyad',
              memleket='$memleket',
              yas='$yas'
              ";
        $ekle=$baglan->query($sql);
        if($ekle){
            echo "<font color='green'>Üye Başarıyla Kaydedildi</font>";
            header("Refresh:1;url=goster.php");
        }else{
            echo "Kayıt Başarısız";
        }
}
?>
</body>
</html>