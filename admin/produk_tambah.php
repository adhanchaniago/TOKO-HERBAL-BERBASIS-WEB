<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("../config.php");
$kode = $_POST['txtkode'];
$nama = $_POST['txtnama'];
$hrg = $_POST['txtharga'];
$desk = $_POST['txtdeskrip'];
$ktg = $_POST['ktglist'];
$stk = $_POST['txtstok'];
$gbr = $_POST['txtgmbr'];
$perintah = "INSERT INTO produktbl (kd_produk,nama,harga,deskripsi,kategori,stok,gambar)
VALUES ('$kode','$nama','$hrg','$desk','$ktg','$stk','$gbr')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:lihat_produk.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>