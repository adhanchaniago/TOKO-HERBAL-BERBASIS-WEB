<?php session_start();
include("../config.php");
$admin = $_POST['username'];
$admin = str_replace("'","&acute;",$admin);
$psw=$_POST['password'];
$psw= str_replace("'","&acute;",$psw);
$cek = "Select * from admintbl where username='".$admin."' and password='".md5($psw)."'";
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
if ($hasil_cek==0){
$_SESSION['adminlogin'] =$admin;
header("location:home.php");
}else{
header("location:index.php");
}
?>