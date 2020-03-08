<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['sess']))echo "<script>document.location=\"laman-detali.php?page=beranda&warn=errorpesan\";</script>";
$nama=$_SESSION['sess'][1];
$id=$_SESSION['sess'][0];
include "../config.php";
?>

<html>
<body onload=window.print()>
<table border="1" width="100%" align="center">
<tr><td colspan="6" align="center" height="100">
<?php 
$no=1;   
 		$pes=mysql_query("select * from transtbl where kd_trans='$_GET[kd_trs]'");
		$row=mysql_fetch_array($pes);
		$kd=$row['kd_trans'];
		$konfirmasi=mysql_query("select * from tranpesan where kd_trans='$kd'");
		
		echo"<tr><td colspan='2' class='entry'>Nama Pemesan : $nama";
		echo"</td><td colspan='4' align='right' class='entry'>Nomer Transaksi : $_GET[kd_trs]</td></tr>";
		echo"<tr><td colspan='3' class='entry'>Tanggal Pesan : $row[tgl_trans]</td>";

	
		echo"<tr><td colspan='6' align='center'><hr></td></tr>";
		echo"<tr align='center' bgcolor='#999999'><td width='5%' class='entry'>No.</td><td width='25%' class='entry'>Kode Produk</td><td width='40%' class='entry'>Nama</td><td width='15%' class='entry'>Harga</td><td width='5%' class='entry'>Jumlah beli</td><td width='10%' class='entry'>Total</td></tr>";
		while ($data3=mysql_fetch_array($konfirmasi)){
		$barang=mysql_query("select * from produktbl where kd_produk='$data3[kd_produk]'");
		$data4=mysql_fetch_array($barang);
			echo"<tr><td width='5%' align='center'  class='entry'>$no</td><td width='20%' align='center'  class='entry'>		 	
			$data4[kd_produk]</td><td width='25%' align='center'  class='entry'>$data4[nama]</td><td width='15%' align='center' 
			class='entry'>$data4[harga]</td><td width='5%' align='center' class='entry'>$data3[jml_bl]</td><td width='30%' 
			align='right' class='entry'>$data3[total]</td></tr>";$no++;
			}echo"<tr><td colspan='3' class='entry'></td><td colspan='3' align='right'>Total : $row[totbay]</td></tr>";
			echo"<tr><td colspan='6' align='center'><hr></td></tr>";
			echo"Cara Pembayaran<hr />
			LANJUTKAN
";
		
$no++;	


?>	
</table>
</body></html>
					
					
