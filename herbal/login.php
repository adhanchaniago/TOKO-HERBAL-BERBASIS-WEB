<?php
$psw=$_POST['pswtxt'];
include"config.php";
$query="select * from pelanggantbl where username='$_POST[usertxt]' AND password='".md5($psw)."'";
$goquery=mysql_query($query);
$data=mysql_fetch_array($goquery);
$nama=$data[nm_pel];
$id=$data[kd_pel];
if(mysql_num_rows($goquery)>0)
{
	$_SESSION['sess']=array($id,$nama);
    echo "<script>document.location=\"?herbal=beranda\";</script>";
}
else
{
	echo "<script type='text/javascript'>
	window.alert('Login Gagal')
		window.location = '?herbal=beranda';
	</script>";
	exit;
}
?>