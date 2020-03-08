<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("../config.php");
$id = $_GET['id'];
$perintah = "DELETE from pelanggantbl where kd_pel = $id";
$result = mysql_query($perintah);
	if ($result) {
		header("location:pelanggan.php");
	} else { echo "Data belum dapat di hapus!!"; 
	}
}
?>