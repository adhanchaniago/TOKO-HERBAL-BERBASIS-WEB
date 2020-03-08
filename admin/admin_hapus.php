<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("../config.php");
$id = $_GET['id'];
$perintah = "DELETE from admintbl where username = $id";
$result = mysql_query($perintah);
	if ($result) {
		header("location:admin.php");
	} else { echo "Data belum dapat di hapus!!"; 
	}
}
?>