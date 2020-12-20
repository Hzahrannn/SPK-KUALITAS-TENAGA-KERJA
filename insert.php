<?php
ob_start();

include "koneksi.php";

?>

<!DOCTYPE HTML>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];
// foreach ($_POST['seni'] as $senivalue){  
//     $seni .= $senivalue.", ";
// }
$seni = implode(', ', $_POST['seni']);
$alat_musik = $_POST['alat_musik'];
// foreach ($_POST['olahraga'] as $olahragavalue){  
//     $olahraga .= $olahragavalue.", ";
// }
$olahraga = implode(', ', $_POST['olahraga']);
$prestasi = implode(', ', $_POST['prestasi']);

function uploadgambar(){
	$listGambar = "";
	$error=array();
	$extension=array("jpeg","jpg","png","ico");
	$fileNames = array_filter($_FILES['files']['name']);
	if(!empty($fileNames)){
		// $listGambar = implode(', ', $fileNames);
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
			//echo $_FILES["files"]["size"][$key];
			if($_FILES["files"]["size"][$key] < 10000000){
				$file_name=$_FILES["files"]["name"][$key];
				$file_tmp=$_FILES["files"]["tmp_name"][$key];
				$ext=pathinfo($file_name,PATHINFO_EXTENSION);
				$ext=strtolower($ext);
				if(in_array($ext,$extension)) {
					if(!file_exists("uploads/"."/".$file_name)) {
						$listGambar .= $file_name.", ";
						move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$file_name);
					}
					else {
						$filename=basename($file_name,$ext);
						$newFileName=$filename.time().".".$ext;
						move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$newFileName);
						$listGambar .= $newFileName.", ";
					}
				}
				else {
					array_push($error,"$file_name, ");
				}
			}
		}
		return $listGambar; 
	}
}
$gambar = uploadgambar();

$insert="INSERT INTO minat (nama, nim, angkatan, email, kontak, seni, alat_musik, olahraga, prestasi, gambar)
VALUES ('$nama', '$nim', '$angkatan', '$email', '$kontak', '$seni', '$alat_musik','$olahraga', '$prestasi', '$gambar')";

if ($conn->query($insert) === TRUE) {
	// echo $gambar;
	echo  "<script>
			Swal.fire('Data Berhasil Dikirim !', 'Terimakasih', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
} else {
	// echo $gambar;
	echo "<script>
			Swal.fire('Gagal !', 'Isi Data Dengan benar!', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
}


?>

</body>
</html>