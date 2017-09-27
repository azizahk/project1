<?php


$host = 'localhost' ;
$user = 'root' ;
$pass = ''; //bisa juga root
$db   = 'club' ;


$con = mysqli_connect($host, $user, $pass, $db);


if ($con) {
	echo 'berhasil koneksi';
}
	else{
		echo 'gagal koneksi';
	}


?>