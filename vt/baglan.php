<?php
    session_start();
    ob_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="vt";
    try{
        $baglan=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		//echo "Bağlantı Başarılı";
	}
    catch(PDOException $e){
        echo "Mysql Bağlantı Hatası!!!";
		echo $e;
    }
	
    $baglan->query("SET CHARACTER SET utf8");
?>