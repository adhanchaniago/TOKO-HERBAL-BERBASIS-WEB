<?php

$cek="Select * from kategoritbl order by id asc";
$hasil=mysql_query($cek);
if ($hasil > 0) {
	if ((isset($_SESSION['userlogin'])) == ''){
		echo "<li><a href=\"?herbal=produk\">All</a></li>";
	}else{
		echo "<li><a href=\"?herbal=produk\">All</a></li>";
	}
	while($data=mysql_fetch_array($hasil))
		{
			if ((isset($_SESSION['userlogin'])) == ''){
		echo "<li><a href=\"?herbal=produk&kdt=$data[kategori]\">$data[kategori]</a></li>";
			}
			else{
			echo "<li><a href=\"?herbal=produk&kdt=$data[kategori]\">$data[kategori]</a></li>";
			}	
		}
}
?>