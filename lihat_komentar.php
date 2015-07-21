<?php
include 'config/koneksi.php';

$lihat="SELECT * FROM guest_book ORDER BY id";
$hasil=mysqli_query($konek,$lihat)or die(mysqli_error($konek));

while ($data=mysqli_fetch_array($hasil)) { ?>


            
            <div class="clr"></div>
            <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
              <p><strong><?php echo $data['nama'] ?> Says :<BR>
              <?php echo $data['email'] ?></p>
              <p><strong><?php echo $data['komentar'] ?></p>
            </div>
 <?php

}

 ?>           
