<?php
error_reporting(0);
session_start();
$id=$_SESSION['sess'][0];
$user=$_SESSION['sess'][1];
?>
<table width="564" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="14%" align="left" scope="col" >kode</th>
    <th width="19%" align="left" scope="col">Nama</th>
    <th width="19%" align="right" scope="col">Harga</th>
    <th width="15%" align="right" scope="col">Stock</th>
    <th width="18%" align="left" scope="col">Gambar</th>
    <th width="15%" align="center" scope="col">Aksi</th>
  </tr>
  <?php
require("../config.php");
$query = "select * from produktbl order by kd_produk desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['kd_produk']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['nama']."</td>
<td align=\"right\" width=\"7%\" bgcolor=\"#FFFFFF\">".number_format($data['harga'], 0, ',','.')."</td>
<td align=\"right\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['stok']."</td>
<td align=\"center\"><img src=\"../Produk/$data[gambar]\" width=\"45\" height=\"58\" border=\"0\"/></td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"produk_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../images/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>
</table>
