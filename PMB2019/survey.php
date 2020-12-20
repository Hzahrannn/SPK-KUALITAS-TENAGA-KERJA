<?php
ob_start();

include "db.php";


$nama =$_POST['nama'];
$nim = $_POST['nim'];
$angkatan =$_POST['angkatan'];
$kontak = $_POST['kontak'];
$seni =$_POST['seni'];
$alat_musik = $_POST['alat_musik'];
$olahraga = $_POST['olahraga'];


foreach ($_POST['seni'] as $senivalue)
{  
  $seni_value .= $senivalue.", ";
}

foreach ($_POST['olahraga'] as $olahragavalue)
{  
  $olahraga_value .= $olahragavalue.", ";
}
$insert="INSERT INTO minat (nama, nim, angkatan, kontak, seni, alat_musik, olahraga)
VALUES ('$nama', '$nim', '$angkatan', '$kontak', '$seni_value', '$alat_musik','$olahraga_value')";




if ($conn->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $conn->error;
}
$conn->close();

header("location: index.php");
exit;




?>