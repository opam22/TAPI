<?php
include "hit_counter.php"


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TAPI(Tugas Akhir Pemrograman Internet)</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>TEKNIK</span>Unsada<small><br>Enginering Faculty on Darma Persada University</small></a></h1>
      </div>
      <div class="search">
        <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li   class="active"><a href="support.php">Dukungan</a></li>
          <li><a href="about.php">Tentang</a></li>
          <li><a href="blog.php">Kotak Saran</a></li>
          </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2>FAKULTAS TEKNIK UNIVERSITAS UNSADA</h2>
            <div class="clr"></div>
            <p><img src="images/bemft.png" title="BEM FT UNSADA">FAKULTAS TEKNIK UNIVERSITAS DARMA PERSADA</p></div>
          
        </div>
       <div class="sidebar">
          <div class="gadget">
            <?php
              //di cek kalo user udah login, tampilkan ini
                       if (isset($_SESSION['username'])) { 
                         include 'menulogin.php';

                         ?>
                           
                           <h4 style="color:red;">buat profile user disini</h4>
                     

                       <?php  
                       }
              //kalo user belum login, tampilkan ini
                       else{?>
                         
                         <h2 class="star"><span>Sign In</span></h2>
                         
                        <?php 
                         
                         include 'login.php';
             
                       }

            ?>
          </div>
          <div class="gadget">
            
            <div class="clr"></div>
            <ul class="ex_menu">
            <hr>
            <h2 class="star"><span>Counter</span></h2>
     <table>
     
    <tr><td>Pengunjung hari ini</td><td>:</td><td><?php echo $jlh_hari; ?></td></tr> 
    <tr><td>Pengunjung bulan ini</td><td>:</td><td><?php echo $jlh_bulan; ?></td></tr>
    <tr><td>Pengunjung tahun ini</td><td>:</td><td><?php echo $jlh_tahun; ?></td></tr>
    <tr><td>Total Pengunjung</td><td>:</td><td><?php echo $jlh_dari_awal; ?></td></tr>
    <tr><td>Pengunjung Online</td><td>:</td><td><?php echo $time_online; ?></td></tr>
    <tr><td>IP Address Anda</td><td>:</td><td><?php echo $ip_address; ?></td></tr>
     </table>
            </ul>
            <hr>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Wise Words</span></h2>
            <div class="clr"></div>
            <div class="testi">
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pic_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>About</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
    <p class="rf">Layout by Rocket <a href="http://www.rocketwebsitetemplates.com/">Website Templates</a></p>
    <div class="clr"></div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>