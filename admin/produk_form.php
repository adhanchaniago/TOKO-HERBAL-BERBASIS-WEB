<form name="form1" method="post" action="produk_tambah.php">
  <table width="500" border="0">
    <tr>
      <td width="121">Kode Produk</td>
      <td width="369"><label for="txtkode"></label>
      <input name="txtkode" type="text" id="txtkode" size="15"></td>
    </tr>
    <tr>
      <td>Nama Produk</td>
      <td><label for="txtnama"></label>
      <input name="txtnama" type="text" id="txtnama" size="35"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label for="txtharga"></label>
      <input name="txtharga" type="text" id="txtharga" size="35"></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td><label for="txtdeskrip"></label>
      <textarea name="txtdeskrip" rows="2" id="txtdeskrip"></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">Kategori</td>
      <td align="left" valign="top"><label for="ktgtxt"></label>
        <label for="ktglist"></label>
        <select name="ktglist" size="1" id="ktglist">
            
      <?php
  require ("../config.php");
  $perintah="select * from kategoritbl order by kategori asc";
  $hasil=mysql_query($perintah);
  while ($data = mysql_fetch_array($hasil))
 {
  ?>
      <option value="<?php echo "$data[kategori]"; ?>"><?php echo "$data[kategori]"; }?></option>
      </select></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><label for="txtstok"></label>
      <input type="text" name="txtstok" id="txtstok"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><label for="txtgmbr"></label>
      <input type="text" name="txtgmbr" id="txtgmbr"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Simpan" id="Simpan" value="Simpan"></td>
    </tr>
  </table>
</form>
