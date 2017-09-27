<?php
include('koneksi.php');

function test_input($data){
		$fix	= trim($data);
		$fix2	= stripslashes($fix);
		$fix3	= htmlspecialchars($fix2);
		return $fix3;
}

if($_POST){
	$nama = test_input($_POST['nama']);
	$email = test_input($_POST['email']);
	$hp = test_input($_POST['hp']);
	$gender = test_input($_POST['gender']);

	$query = "INSERT INTO registrasi (id_registrasi, nama, email, no_hp, gender) VALUES ('', '$nama', '$email', '$hp', '$gender') ";

	$insert = mysqli_query($con, $query);

	if ($insert) {
		header ("location:data_regis.php");
	} else {
		header ("location:data_regis.php");
	}
}

?>