<?php 
include ("../config.php");

//enkripsi password sebalum disimpan di database
$kode=$_POST['kodetxt'];
$nama=$_POST['namatxt'];
$password=md5 ($_POST ['pswtxt']);
$username=$_POST['usertxt'];
mysql_query("insert into admintbl values ('$kode','$nama','$username','" .md5($password). "')");

header('location:admin.php');
	

?>