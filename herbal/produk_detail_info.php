<style type="text/css">
.teks_info_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
}
.teks_harga_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
	font-weight: bold;
}
</style>

<?php

$id = $_GET['id'];
	$query = "select * from produktbl where id = '".$id."'";
	$hasil = mysql_query($query);
	$temukan = mysql_num_rows($hasil);
	$data = mysql_fetch_array($hasil);
	if($temukan==0){
	}else{
?>

<table border=0px cellpadding='5' cellspacing="2" bgcolor="" bordercolor="" align="center">
	<tr>
        
<td align=center>			 
    <div class="teks_info_produk">
    	<?php echo $data['nama']; ?><br><br>
    </div>
    
    <div>
	<img width='120px' height='170px' valign='top' border='1,5' src="Produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		
    
    <div class ="teks_info_produk">
    	<?php echo $data['deskripsi']; ?><br><br>
    </div> 
	
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>
     <div>
        <?php
		echo '
	<a href="?herbal=produk_beli&id='.$data['id'].'&jml=1"><img src="images/TBeli.jpg"\ title="Beli Sekarang" border="0" width=\"50\" height=\"30\"></a>';
	}?>
     <hr />
     </div>
     
</td>    
</tr>
</table>
    
