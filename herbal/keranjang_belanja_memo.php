<?php
error_reporting(0);
session_start();
$id=$_SESSION['sess'][0];
$user=$_SESSION['sess'][1];
?>
	<?php
if(!$nama){
echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('Silahkan Masukkan Data Anda Dengan Lengkap...!!!')</script>");
echo "<script>document.location=\"herbal.php?herbal=masuk\";</script>";
}?>
		
		 <table border="1" width="100%" align="center">
		 <tr><td colspan="4" class="entry"><?php echo"NAMA PEMESAN : <b>$nama</b>";?></td>
		 <td align="right" class="entry" colspan="3">
		 </td>		 
		 </tr>
         <tr align="center"><td width="5%" class="entry">No.</td>
		 <td width="12%" class="entry">Kode Produk</td>
		 <td width="32%" class="entry">Nama</td><td width="17%" class="entry">Harga</td><td width="5%" class="entry">Qty</td><td width="14%" class="entry">Total</td>
		 <?php
		 include"../config.php";
		
		 $memberx=mysql_query("select * from pelanggantbl where kd_pel='$id'");
   		 $datax=mysql_fetch_array($memberx);
   		 $id_pelanggan=$datax[id_pelanggan];
		 $kdtr=mysql_query("select * from transtbl where kd_pel='$id' and status='0'");
   		 $kdtrans=mysql_fetch_array($kdtr);
		 $kdptr=$kdtrans[kd_trans];
		 $sql = "select * from temptrans where kd_trans='$kdptr'";
		 $result = mysql_query($sql);
		 $record = mysql_num_rows($result);
		 $no=1;
		 if($record==0)
{   mysql_query("update pesanan set totbay='0' where id_pelanggan='$id' and status='0'");
	echo("<SCRIPT LANGUANGE='JavaScript'>window.alert('-- Keranjang Belanja Masih Kosong --')</script>");
	echo "<script>document.location=\"herbal.php?herbal=produk\";</script>";
		
}else{
		 while($row=mysql_fetch_array($result))
		 
		 {
		 $subtotal=$subtotal + $row[total];
		 $buku = "select * from produktbl where kd_produk='$row[kd_produk]'";
		 $bk = mysql_query($buku);
		 $dpt = mysql_fetch_array($bk);
		 mysql_query("update transtbl set totbay=$subtotal where kd_pel='$id' and status='0'");
		 echo"
		 
		 <tr align='center'><td class='entry'>$no</td><td class='entry'>$dpt[kd_produk]</td>
		 <td class='entry'>$dpt[nama]</td><td align='center' class='entry'>$dpt[harga]</td>
		 <td align='center' class='entry'>$row[jml_bl]</td><td align='center' class='entry'>$row[total]</td>
		 </tr>
		 ";$no++;
		 }}
		 echo"<tr><td colspan='5' align='right' class='entry'>TOTAL KESELURUHAN</td>
		 <td align='right' colspan='2' class='entry'>Rp. $subtotal</td></tr>";
		
		 echo "</table><hr/><table border='0' width='100%' align='center'><form method='POST' 
		 action='herbal.php?herbal=pembayaran&kdt=$kdptr'>
		 <tr><td colspan='3'>* Jika Anda sudah yakin ingin memesan barang tersebut di atas, untuk mengkonfirmasi klik tombol <b>Beli</b>.</td></tr><tr><td colspan='3' align='center'>"
		 
		 
		  
		?>
<input type="hidden" name="txttotal" value="<?php echo"$subtotal";?>" />
<input type="hidden" name="txtid" value="<?php echo"$id_pelanggan";?>" />
<input type="submit" value="Beli" /></td></tr></form></table>
