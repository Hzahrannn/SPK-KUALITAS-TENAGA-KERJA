<?php
 
$db_host = "localhost";
$db_user = "himsiuns_pmb";
$db_pass = "pmb2019";
$db_name = "himsiuns_minatbakat";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}


// 1. $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or 
//		die("Koneksi gagal!");
//---------------//
// 2. mysql_connect("localhost","root","") or die ("Gagal Mengkoneksikan Ke Database");
// mysql_select_db("mahasiswa") or die ("Database Tidak Ditemukan");

?>