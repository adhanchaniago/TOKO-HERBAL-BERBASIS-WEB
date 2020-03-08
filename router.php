<?php

// Bagian Beranda
if ($_GET['herbal']=='beranda'){
   include "herbal/beranda.php";
}
// Bagian produk
if ($_GET['herbal']=='produk'){
   include "herbal/produk.php";
}
if ($_GET['herbal']=='produk_beli'){
   include "herbal/produk_beli.php";
}
// Bagian produk
if ($_GET['herbal']=='produk_detail'){
   include "herbal/produk_detail_info.php";
}
// Bagian Cara Order
if ($_GET['herbal']=='cara_order'){
   include "herbal/cara_order.php";
}
// Bagian Testimonial
if ($_GET['herbal']=='testimoni'){
   include "herbal/testimoni.php";
}
// Bagian Tentang Kami
if ($_GET['herbal']=='kami'){
   include "herbal/tentang_kami.php";
}
// Bagian Jaga Berat
if ($_GET['herbal']=='jaga_berat'){
   include "herbal/jaga_berat.php";
}
// Bagian Minum Obat
if ($_GET['herbal']=='minumobat'){
   include "herbal/minum_obat.php";
}
// Bagian Naik
if ($_GET['herbal']=='naik'){
   include "herbal/naik.php";
}
// Bagian Turun
if ($_GET['herbal']=='turun'){
   include "herbal/turun.php";
}
// Bagian login
if ($_GET['herbal']=='login'){
   include "herbal/login.php";
}
// Bagian Daftar
if ($_GET['herbal']=='daftar'){
   include "herbal/daftar_form.php";
}
// Bagian Daftar Simpan
if ($_GET['herbal']=='daftar_simpan'){
   include "herbal/daftar_simpan.php";
}
// Bagian Logout
if ($_GET['herbal']=='logout'){
   include "herbal/logout.php";
}
// Bagian Keranjang Belanja
if ($_GET['herbal']=='keranjang_belanja'){
   include "herbal/keranjang_belanja_memo.php";
}
// Bagian Logout
if ($_GET['herbal']=='pembayaran'){
   include "herbal/pembayaran.php";
}

// Apabila menu tidak ditemukan
else{
}
?>