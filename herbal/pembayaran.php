<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['sess']))echo "<script>document.location=\"herbal.php?page=home&warn=error\";</script>";
$nama=$_SESSION['sess'][1];
$id=$_SESSION['sess'][0];
?>
<script language="javascript">

function buka(url,pjg,lbr)

{

openwindow = this.open(url,"","width="+pjg+",height="+lbr+",scrollbars=yes");

}

</script>




        <h2 class="title">Data Pesanan<hr /></h2>

<table border="1" width="80%" align="center">
<br></br>
<?php 

				
				mysql_query("update produktbl set stok='$kurang' where kd_produk='$jml' ");
 
		$cb=mysql_query("select * from transtbl where kd_trans='$_GET[kdt]' and status='0' ");
		$bc=mysql_fetch_array($cb);
		$cbbd=$bc['kd_trans'];
		$konfirmasi=mysql_query("select * from temptrans where kd_trans='$cbbd'");
		while ($data2=mysql_fetch_array($konfirmasi)){
		mysql_query("insert into tranpesan values('$data2[kd_produk]','$data2[jml_bl]','$data2[total]','$data2[kd_pel]','$data2[kd_trans]') ");
		mysql_query("delete from temptrans where kd_trans='$cbbd'");
		}
		?>
        <?php
		$no=1; 
 		mysql_query("update transtbl set status='1' where kd_trans='$_GET[kdt]' ");
		$pes=mysql_query("select * from transtbl where kd_trans='$_GET[kdt]' and status='1'");
		$row=mysql_fetch_array($pes);
		$kd=$row['kd_trans'];

		$temp=mysql_query("select * from tranpesan where kd_trans='$kd'");
		
		echo"<tr><td colspan='2' class='entry'>Nama Pemesan : $nama";
		echo"</td><td colspan='4' align='right' class='entry'>Nomer Transaksi : $_GET[kdt]</td></tr>";
		echo"<tr><td colspan='3' class='entry'>Tanggal Pesan : $row[tgl_trans]</td>";
	
		echo"<tr><td colspan='6' align='center'><hr></td></tr>";
		echo"<tr align='center' bgcolor='#999999'><td width='5%' class='entry'>No.</td><td width='25%' class='entry'>Kode Produk</td><td width='40%' class='entry'>Nama</td><td width='15%' class='entry'>Harga</td><td width='5%' class='entry'>Jumlah beli</td><td width='10%' class='entry'>Total</td></tr>";
		while ($data3=mysql_fetch_array($temp)){
		$barang=mysql_query("select * from produktbl where kd_produk='$data3[kd_produk]'");
		$data4=mysql_fetch_array($barang);
		$kurang = $data4['stok']-$data3['jml_bl'];
		mysql_query("update produktbl set stok='$kurang' where kd_produk='$data3[kd_produk]' ");
			echo"<tr><td width='5%' align='center'  class='entry'>$no</td><td width='20%' align='center'  class='entry'>		 	
			$data4[kd_produk]</td><td width='25%' align='center'  class='entry'>$data4[nama]</td><td width='15%' align='center' 
			class='entry'>$data4[harga]</td><td width='5%' align='center' class='entry'>$data3[jml_bl]</td><td width='30%' 
			align='right' class='entry'>$data3[total]</td></tr>";$no++;
			}echo"<tr><td colspan='3' class='entry'></td><td colspan='3' align='right'>Total : $row[totbay]</td></tr>";
			echo"<tr><td colspan='6' align='center' class='entry'>"; ?>
			<a href="javascript:buka('herbal/cetak.php?kd_trs=<?php echo"$_GET[kdt]";?>',700,600)"> <?php echo"[Cetak Pesanan]"; ?></a></td></tr>
			<tr><td colspan='6' align='center'><hr></td></tr>
			<tr><td colspan='6' align='center' class='entry'>
			</td></tr>
			<?php echo"<tr><td colspan='6' align='center'><hr></td></tr>";
$no++;
?>	
</table>

					
					
