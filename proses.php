<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username) && !empty($password)){
	$sql=pg_query($connect,"SELECT * FROM tgs8 WHERE username='$username' AND password='$password'");
	$result = pg_numrows($sql);

	if($result){
		header('Location:admin.php');
	} else{
		echo "Username atau Password anda salah";
	}
}else{
	echo "Silahkan mengisi Username dan Password";
}
?>