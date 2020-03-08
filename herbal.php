 <?php 
error_reporting(0);
session_start();
$id=$_SESSION['sess'][0];
$nama=$_SESSION['sess'][1];
include "library.php";
include "config.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Toko Herbal</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>
<body>

<div id="header_wrapper">

	<div id="header">
    
   		<div id="site_title">
            <h1><a rel=><img src="images/logo.png" alt="CSS Templates" /></a></h1>
        </div>
        
         <div id="menu">
            <ul>
      <li><a href="?herbal=beranda" 	><span>Home</span></a></li>
      <li><a href="?herbal=produk"		><span>Produk</span></a></li>
      <li><a href="?herbal=cara_order"	><span>Cara Order</span></a></li>
      <li><a href="?herbal=kami"		><span>Tentang Kami</span></a></li>
            </ul>    	
        </div> <!-- end of menu -->
        
        <div id="search_box">
                <form action="#" method="get">
                     <input type="text" value="Enter a keyword" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                </form>
           </div>
    
    	<div class="cleaner"></div>
    </div> <!-- end of header -->

</div> 
<!-- end of header_wrapper -->

<div id="content_wrapper">

	<div id="content">
       	<?php include "router.php"; ?>                     
       	<div class="content_section">  
    	</div>
	</div> <!-- end of content -->
    
	<div id="templatmeo_sidebar">
    	<div class="sidebar_section"> 
        <?php
				if($nama==''){echo"      		
            <h2>User Login</h2>";}else{
				                     echo "<a href=?herbal=keranjang_belanja><h1>Keranjang Belanja $nama</h1></a>";
                }?>
			       	
       		<div class="sidebar_section_content">                    
                <ul class="categories_list">
                <?php
				if($nama==''){
                    include"herbal/form_login.php";
                    }else{
				echo "<a href=?herbal=logout><h1>Logout</h1></a>";
           		}
                    ?>
                </ul>
            </div>
            <div class="sidebar_section_content">                    
            </div>
            <h2>Kategori</h2>       	
       		<div class="sidebar_section_content">                    
                <ul class="categories_list">
                    <?php include"herbal/kategori.php";?>
                </ul>
            </div>
            <h2>Cara Pemakaian</h2>
            <div class="sidebar_section_content">  
     			 <ul class="categories_list">
       				<li><a href="?herbal=turun" >Produk Turun Berat Badan</a></li>
       				<li><a href="?herbal=naik">Produk Naik Berat Badan</a></li>
        			<li><a href="?herbal=jaga_berat">Produk Menjaga Berat Badan</a></li>
        			<li><a href="?herbal=minumobat">Produk yang mengkonsumsi Obat</a></li>
      			</ul>
            </div>
                           
        </div>
        
        <div class="cleaner_h30"></div>
  
	</div> <!-- end of sidebar -->
    
  	<div class="cleaner"></div>    

</div> <div id="content_wrapper_bottom"></div> <!-- end of content_wrapper -->

<div id="footer">

   			<ul class="footer_menu">
					Toko Herbal Mang Dadang
            </ul>
            

</div> <!-- end of footer -->

</body>
</html>