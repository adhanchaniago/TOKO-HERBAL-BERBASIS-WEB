<style type="text/css">
.teks_nama_produk {
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

<h2>Produk</h2>
<?php
$ktg=$_GET[kdt];
include "../config.php";
if(empty($_GET[kdt])){
	$query = "select * from produktbl order by id desc";
	$hasil = mysql_query($query);
	$numrows = mysql_num_rows($hasil);
	//Paging Data sebanyak 12 data product perlembar
	$jumlah = mysql_num_rows($hasil);
	$limit = 12;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM produktbl ORDER BY id DESC LIMIT $offset, $limit";
		$result = mysql_query($seleksi);
		echo "<div align=\"right\">";
		$halaman = intval($jumlah/$limit);
		if ($jumlah%$limit) { 
			$halaman++; 
		} 
			for ($i=1;$i<=$halaman;$i++) {
				$newoffset=$limit*($i-1); 
					if ($offset!=$newoffset)
						{ 
						echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" 	href=\"?herbal=produk&offset=$newoffset\">$i</a>]</font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div>";
	    //Batas kode paging data
?>
<table border="0" cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="left">
	<tr>
<?php
	$kolom=3;
	$x = 0;
	if($numrows > 0){
	while($data=mysql_fetch_array($result))
		{
		    if ($x >= $kolom) 
			    {
			      echo "</tr><tr>";
			      $x = 0;
				}
	$x++;
?>

<td align=center>			 
	<div class ="teks_nama_produk">
    	<?php echo $data['nama']; ?><br><br>
    </div>
    
    <div>
		<img width='80px' height='105px' valign='top' border='1,5' src="Produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		 
	
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

    <div>
        <?php
		echo '
	<a href="?herbal=produk_detail&id='.$data['id'].'"><img src="images/TDetail.jpg"\ 
	title="Detail Produk" border="0" width=\"50\" height=\"30\"></a>';
		?>
	</div>
      <hr />	
</td>
            
<?php
	}
	}
?>

</tr>
</table> 
<?php 
}else{
		$query = "select * from produktbl  order by id desc";
	$hasil = mysql_query($query);
	$numrows = mysql_num_rows($hasil);
	
	//Paging Data sebanyak 12 data product perlembar
	$jumlah = mysql_num_rows($hasil);
	$limit = 12;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM produktbl where kategori='$_GET[kdt]' ORDER BY id DESC LIMIT $offset, $limit";
		$result = mysql_query($seleksi);

		echo "<div align=\"right\">";
		$halaman = intval($jumlah/$limit);
		if ($jumlah%$limit) { 
			$halaman++; 
		} 
			for ($i=1;$i<=$halaman;$i++) {
				$newoffset=$limit*($i-1); 
					if ($offset!=$newoffset)
						{ 
						echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" 	href=\"?herbal=produk&offset=$newoffset\">$i</a>]</font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div>";
	    //Batas kode paging data
?>



<table border="0" cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="left">
	<tr>
     
<?php
	$kolom=3;
	$x = 0;
	if($numrows > 0){
	while($data=mysql_fetch_array($result))
		{
		    if ($x >= $kolom) 
			    {
			      echo "</tr><tr>";
			      $x = 0;
				}
	$x++;
?>

<td align=center>			 
	<div class ="teks_nama_produk">
    	<?php echo $data['nama']; ?><br><br>
    </div>
    
    <div>
		<img width='80px' height='105px' valign='top' border='1,5' src="Produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		 
	
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

    <div>
        <?php
		echo '
	<a href="?herbal=produk_detail&id='.$data['id'].'"><img src="images/TDetail.jpg"\ 
	title="Detail Produk" border="0" width=\"50\" height=\"30\"></a>';
		?>
	</div>
      <hr />	
</td>
            
<?php
	}
	}
?>

</tr>
</table>
<?php	}?>