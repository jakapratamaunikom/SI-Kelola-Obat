<?php
	
	  //KONEKSI
include("connection/connect.php");
	  ///VARIABEL
	  
	  $kd_obat	=	$_GET['kd_obat'];
	 	
	  $query =  mysqli_query($connect,"DELETE FROM obat WHERE kd_obat='$kd_obat'");
	 	  
	  
		
		
if($query){
	header("location:beranda.php");
}

	
	else{
		header("Location:not_found.php");
	}
?>