<?php
	error_reporting(0); 
	session_start();
	include"config.php";
	$id=$_SESSION['sess'][0];
?>

<?php	
$mnhjk = "select * from transtbl where kd_pel='$id'";
$dfg = mysql_query($mnhjk);
while ($klmn = mysql_fetch_array($dfg)){
$mcbj = $klmn['kd_trans'];
$jklm = $klmn['status'];
mysql_query("delete from temptrans where kd_trans='$mcbj'");
mysql_query("delete from transtbl where kd_trans='$mcbj' and status='0'");
}
?>

<?php
if(isset($_SESSION['sess']))
  unset($_SESSION['sess']);
echo "<SCRIPT LANGUANGE='JavaScript'>window.alert('Terimakasih')</script>";
echo "<script>document.location='herbal.php?herbal=beranda';</script>";
?>