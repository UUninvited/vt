<?php
require("baglan.php");
if(empty($_SESSION["yoneticiadi"])){
    echo '<p>Bu sayfayı görmeye yetkiniz yok!!! Lütfen Giriş Yapınız!</p>';
    header("Refresh:3;url=giris.php");
    exit();
}
?>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="kayit.php">KAYIT EKLE</a><br>
<br>
<table border="1" cellspacing="0" cellpadding="5" align="center" width="600">
	<tr>
		<th>Personel ID</th>
		<th>Personel Adı</th>
		<th>Personel Soyadı</th>
		<th>Personel Memleketi</th>
		<th>Personel Yaşı</th>
        <th colspan="2">Personel İşlemleri</th>
	</tr>
<?php
$sql="select * from personel";
            $sorgu=$baglan->query($sql,PDO::FETCH_ASSOC);
            foreach ($sorgu as $personel){ 
                	 ?><tr><?php
                     echo "<td>".$personel["pid"]."</td>"; 
                     echo "<td>".$personel["ad"]."</td>";
                     echo "<td>".$personel["soyad"]."</td>"; 
                     echo "<td>".$personel["memleket"]."</td>"; 
                     echo "<td>".$personel["yas"]."</td>";
                     
                     ?>
                     <td><a href="pguncelle.php?id=<?php 
                     echo $personel["pid"] ?>">Üye Güncelle</a></td>
            <td><a href="psil.php?id=<?php echo $personel["pid"] ?>">Üye Sil</a></td>
            <?php
                    echo "</tr>";
                    }
?>

</table>
<br>
<a href="giris.php?oturum=kapat">ÇIKIŞ YAP</a>
</body>
</html>