<?php
error_reporting(0);
session_start();
$id=$_SESSION['sess'][0];
$user=$_SESSION['sess'][1];
?>
<table width="383" border="1">
  <tr bgcolor="#00CC33">
    <td width="58" align="center" bgcolor="#FFFFFF">ID</td>
    <td width="103" align="center" bgcolor="#FFFFFF">Nama</td>
    <td width="104" align="center" bgcolor="#FFFFFF">Username</td>
    <td width="104" align="center" bgcolor="#FFFFFF">Aksi</td>
  </tr>
 <?php
require("../config.php");
$query = "select * from admintbl order by kd_adm asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" bgcolor=\"#FFFFFF\">".$data['kd_adm']."</td>
<td align=\"left\" bgcolor=\"#FFFFFF\">".$data['nm_adm']."</td>
<td align=\"left\" bgcolor=\"#FFFFFF\">".$data['username']."</td>
<td align=\"center\" width=\"10%\" bgcolor=\"#FFFFFF\"><a href=\"admin_hapus.php?id=$data[username]\"><img width=\"15\" src=\"../images/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";
}

?>

</table>
