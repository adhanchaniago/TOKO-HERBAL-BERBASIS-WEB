<?php
include("config.php");
if(empty($_POST['namatxt']) || empty($_POST['almtxt']) || empty($_POST['emailtxt']) || empty($_POST['usertxt']) || empty($_POST['tlptxt'])|| empty($_POST['pswtxt'])){
	echo "<SCRIPT LANGUANGE='JavaScript'>window.alert('Data Belum Lengkap')</script>";
	echo "<script>document.location='herbal.php?herbal=daftar';</script>";
	exit;
}else{
$valid_nama_alamat_user= "/^[a-z]+[.,a-z ]+$/";
$valid_mail_telepon = "/^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$/";
$nama = $_POST['namatxt'];
$alamat = $_POST['almtxt'];
$email = $_POST['emailtxt'];
$username = $_POST['usertxt'];
$tlp_tag = $_POST['tlptxt'];
$telepon = nl2br($tlp_tag);
$psw_tag = $_POST['pswtxt'];
$password = nl2br($psw_tag);
$ulgpsw_tag = $_POST['ulgpswtxt'];
$ulgpassword = nl2br($ulgpsw_tag);
if ($password <> $ulgpassword) {
	echo "<li>Password tidak sama, ulangin password Anda!</li>";
}else{
$password= str_replace("'","&acute;",$password);
if (!preg_match($valid_mail_telepon, $email) || !preg_match($valid_nama_alamat_user, $nama) || !preg_match($valid_nama_alamat_user, $alamat) ||     !preg_match($valid_meail_telepon, $telepon) || !preg_match($valid_nama_alamat_user, $alamat) || empty($password)){
}else{
$kesalahan=TRUE;
}
if (isset($kesalahan)) {
if (!preg_match($valid_mail_telepon,$email)){echo "<li>Penulisan alamat E-mail Anda salah!</li>";}
if (!preg_match($valid_mail_telepon,$telepon)){echo "<li>Penulisan no TELEPON Anda salah!</li>";}
if (!preg_match($valid_nama_alamat_user,$nama)){echo "<li>Penulisan NAMA Anda salah!</li>";}
if (!preg_match($valid_nama_alamat_user,$alamat)){echo "<li>Penulisan ALAMAT Anda salah!</li>";}
if (!preg_match($valid_nama_alamat_user,$username)){echo "<li>Penulisan USERNAME Anda salah!</li>";}
if (empty($password)){ echo "<li>Anda belum menuliskan <b>PASSWORD Anda</b></li>"; }
} else {
	$cari= "select * from pelanggantbl WHERE username='$username'";
	$hasil = mysql_query($cari);
	$seleksi = mysql_num_rows($hasil);
	if ($seleksi==0) 		{
$query = "INSERT INTO pelanggantbl (nm_pel,alamat,telepon,email,username,password) 
VALUES ('$nama','$alamat','$telepon','$email','$username','" .md5($password). "')";
$result = mysql_query($query);
if ($result) {
echo"<script>alert('terima kasih,,Anda telah menjadi member kami');
	window.location='?herbal=login'</script>";}else{
echo"Daftar member Anda tidak berhasil.";
}
}else{
echo"Daftar member Anda sama tidak berhasil.";
}
}
}
}
?>