<style type="text/css">
.teks_form {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size:12px;
	width:501px;
	height:auto;
	border: solid;
	border-width:1px;
	background:#FFF;
}
.catatan {
	width: 270px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 11px;
	color: #090;
}
</style>
</head>

<body>
<div class="teks_form">
<form id="form1" name="form1" method="post" action="?herbal=daftar_simpan">
  <table width="500" border="0">
    <tr>
      <td width="111" height="33">Nama</td>
      <td width="10">:</td>
      <td width="369"><label for="namatxt"></label>
        <input name="namatxt" type="text" id="namatxt" size="40" maxlength="40" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><label for="almtxt"></label>
      <textarea name="almtxt" cols="40" rows="4" id="almtxt"></textarea></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td><label for="tlptxt"></label>
      <input name="tlptxt" type="text" id="tlptxt" size="40" maxlength="13" /></td>
    </tr>
    <tr>
      <td height="27">E-mail</td>
      <td>:</td>
      <td><label for="emailtxt"></label>
      <input name="emailtxt" type="text" id="emailtxt" size="40" maxlength="40" /></td>
    </tr>
    <tr>
      <td height="39" colspan="3"><div align="center">---isi data dibawah ini untuk login---</div></td>
      </tr>
    <tr>
      <td>Username</td>
      <td>:</td>
      <td><label for="usertxt"></label>
      <input name="usertxt" type="text" id="usertxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><label for="pswtxt"></label>
      <input name="pswtxt" type="text" id="pswtxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td>Re-Password</td>
      <td>:</td>
      <td><label for="ulgpswtxt"></label>
      <input name="ulgpswtxt" type="text" id="ulgpswtxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Daftar" id="Daftar" value="Daftar" />
      <input type="reset" name="Batal" id="Batal" value="Batal" /></td>
    </tr>
    <tr>
      <td height="73">&nbsp;</td>
      <td>&nbsp;</td>
      <td><div class="catatan">* Isi data dengan benar, setiap transaksi yang Anda lakukan sangat berpengaruh pada informasi data member yang Anda input untuk pengiriman produk barang yang Anda beli. Terima kasih.</div></td>
    </tr>
  </table>
</form>
</div>
