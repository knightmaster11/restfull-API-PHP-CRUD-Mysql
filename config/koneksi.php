<?php 
 
// $koneksi = mysqli_connect("localhost","root","","latihan_restfull");
 
// // Check connection
// if (mysqli_connect_errno()){
// 	echo "Koneksi database gagal : " . mysqli_connect_error();
// }else{
//     echo"sukses";
// }
 
define('HOST','localhost');
define('USER','root');
define('DB','latihan_restfull');

define('PASS','');

$conn=new mysqli(HOST,USER,PASS,DB) or DIE('KONEKSI gagal !!');


?>