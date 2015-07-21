<?php  
session_start();

include "config/koneksi.php";

$session= session_id();
$ip_address=$_SERVER['REMOTE_ADDR'];
$tanggal=date("Y-m-d h:m:s");
$tanggal_saja=date("Y-m-d") . "%";

$hari=date("d") . "%";
$hits=1;
$online=1;
$online=time();


$sql="select * from counter where tanggal  like '$tanggal_saja' 
                           and ip_address='$ip_address'";
$query=mysqli_query($konek,$sql);	   
$row=mysqli_fetch_array($query);
$time_online=$row['time_online'];

if($row and $time_online>=$online-50)
{
$sql1="update counter set hits=hits+1,time_online='$online' 
  where tanggal ='$tanggal_saja' and ip_address='$ip_address'";
$query=mysqli_query($konek,$sql1);	
}
else
{
$sql2="insert into counter(session,tanggal,ip_address,hits,time_online) 
       values('$session','$tanggal','$ip_address','$hits','$online')";
$query=mysqli_query($konek,$sql2);	   
}

$jlh_hari=mysqli_num_rows(mysqli_query ($konek,"SELECT * FROM counter WHERE tanggal GROUP BY ip_address LIKE '".date("Y-m-d") ."%'")); 
$jlh_bulan=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  tanggal GROUP BY ip_address LIKE '".date("Y-m")."%'"));
$jlh_tahun=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  tanggal GROUP BY ip_address LIKE '".date("Y")."%'"));



$sql3="SELECT count(*) as jumlah FROM counter GROUP BY ip_address";
$query1=mysqli_query($konek,$sql3);
$row=mysqli_fetch_array($query1);
$jlh_dari_awal=$row['jumlah'];


$bataswaktu= time()-300;
$time_online=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  time_online > '$bataswaktu' GROUP BY session"));


?>