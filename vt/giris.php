<?php
require("baglan.php");

	if(@$_GET["oturum"]=="kapat")
	{
		session_destroy();
	}

if($_POST){
    $kadi=$_POST["kadi"];
    $sifre=$_POST["sifre"];
    $sql="select * from yonetici WHERE kuladi='$kadi' && kulsifre='$sifre'";
    $sorgu=$baglan->query($sql);
    if($sorgu->fetchColumn()>0){
         $sorgu=$baglan->query($sql);
        $bilgi=$sorgu->fetchObject();//tek satırlı bilgi okur
        $_SESSION["yoneticiadi"]=$bilgi->kuladi;
        echo '<p>Giriş Başarılı. Yönlendiriliyorsunuz...</p>';
        header("Refresh:1;url=goster.php");
    }else{
        echo "Kullanıcı adı ya da şifre hatalı";
    }
}

?>

<form action="" method="post">
<input type="text" name="kadi" placeholder="Kullanıcı Adı"><br>
<input type="password" name="sifre" placeholder="Şifre"><br>
<input type="submit" value="Giriş Yap">
</form>
