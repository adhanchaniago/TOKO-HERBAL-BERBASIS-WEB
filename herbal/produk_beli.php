<?php session_start();

$nokd=mysql_query("select * from transtbl");
while($nomortd=mysql_fetch_array($nokd)){
if(empty($nomortd)){$no=1;}else{$no++;}
}
$trid = sprintf("%03s",$no);
$kdtrans="KDTR$trid";
include "../library.php";
include "config.php";
if(!$nama){
echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('Anda Belum Mempunyai Account. Silakan Melakukan Pendaftaran !')</script>");
echo "<script>document.location=\"herbal.php?herbal=daftar\";</script>";

}else {

$query=mysql_query("select * from produktbl where id='$_GET[id]'");
$data=mysql_fetch_array($query);
$harga=$data['harga'];
$kd_pro=$data['kd_produk'];
$qty=$_GET[jml];
$total=$harga*$qty;
$trid = sprintf("%04s", $no);
$kdtrans="KDTR$trid";
$kdtr=$kdtrans;
$tg = date("Y-m-d");


$kldf="select * from temptrans where kd_produk='$kd_pro' ";
$bol=mysql_query($kldf);
$joml= mysql_fetch_array($bol);
$kliop = "select * from produktbl where kd_produk='$kd_pro'";
$gkmj = mysql_query($kliop);
$blkm = mysql_fetch_array($gkmj);
$hjar = $blkm['stok']-$joml['jumlah'];
if($hjar < $qty and $hjar){
	echo("<div class=\'alert alert-block\'><CENTER>
				<!--button type=\'button\' onclick='<a href=javascript:history.go(-1)>' class=\'close\' data-dismiss=\'alert\' >	&times;</button-->
				<h4>Warning!</h4>
					Stok Barang Tidak Mencukupi <br><a href=javascript:history.go(-1)><b>Kembali</b>
				</center></div>");
}else{
				 
	
$kdpsn=mysql_query("select * from transtbl where kd_pel='$id' and status='0'");
while ($crdk=mysql_fetch_array($kdpsn)){
$sts=$crdk[status];
$jml=$crdk[kd_trans];}
if (empty($jml) ){
	mysql_query("insert into temptrans values('$data[kd_produk]','$qty','$total','$id','$kdtrans') ");
	mysql_query("insert into transtbl values('$kdtr','$id','$tg','0','0') ");
	echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('transtbl Berhasil Masuk Kekeranjang Belanja')</script>");
	echo "<script>document.location=\"herbal.php?herbal=keranjang_belanja\";</script>";
	}
else
	{
		$mbn="select * from temptrans where kd_produk='$kd_pro' ";
		$gkj=mysql_query($mbn);
		$alk= mysql_fetch_array($gkj);
		$alka=$alk[jml_bl];
		$alkb=$alk[kd_produk];
		$alkaa=$alka+1;
		$ttl=$alkaa*$harga;
		
		if ($sts=='0' and $alkb==$kd_pro){
		
		mysql_query("update temptrans set jml_bl='$alkaa' where kd_produk='$alkb'");
		mysql_query("update temptrans set total='$ttl' where kd_produk='$alkb'");
		mysql_query("update transtbl set tgl_trans='$tg' where kd_transaksi='$jml' ");
		echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('transtbl Berhasil Ditambahkan Kekeranjang Belanja...!!!')</script>");
		echo "<script>document.location=\"herbal.php?herbal=keranjang_belanja\";</script>";

		}
		else
		{
		
		mysql_query("insert into temptrans values('$kd_pro','$qty','$total','$id','$jml') ");
		mysql_query("update transtbl set tgl_tp='$tg' where kd_transaksi='$jml' ");
		echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('transtbl Berhasil Masuk Kekeranjang Belanja...!!!')</script>");
		echo "<script>document.location=\"herbal.php?herbal=keranjang_belanja\";</script>";

		
	}
}
}
}
?>	

