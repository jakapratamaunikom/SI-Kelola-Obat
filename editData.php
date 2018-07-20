<?php
include("connection/connect.php");
  $kd_obat         =$_POST['kd_obat'];
      $nama               =$_POST['nama'];
      $jenis             =$_POST['jenis'];
      $kategori           =$_POST['kategori'];
      $harga             =$_POST['harga'];
      $qty            =$_POST['qty'];
      $satuan        =$_POST['satuan'];

$myqry=mysqli_query($connect,"UPDATE obat
	SET nama=trim('$nama'),
	jenis=trim('$jenis'),
	kategori=trim('$kategori'),
	harga=trim('$harga'),
	qty=trim('$qty'),
	satuan=trim('$satuan')

	
	WHERE kd_obat='$kd_obat'"	); 
	

	
	echo'<script>alert("Terima Kasih , Data telah di Edit"); </script>';
	header("location:beranda.php");

?>