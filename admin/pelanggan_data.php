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
    <th width="19%" align="right" scope="col">Alamat</th>
    <th width="15%" align="right" scope="col">Telepon</th>
    <th width="18%" align="left" scope="col">Email</th>
    <th width="15%" align="center" scope="col">Username</th>
    <th width="15%" align="center" scope="col">Aksi</th>
  </tr>
  <?php
require("../config.php");
$query = "select * from pelanggantbl order by kd_pel asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['kd_pel']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['nm_pel']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['alamat']."</td>
<td align=\"right\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['telepon']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['email']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['username']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"pelanggan_hapus.php?id=$data[kd_pel]\"><img width=\"15\" src=\"../images/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>
</table>
