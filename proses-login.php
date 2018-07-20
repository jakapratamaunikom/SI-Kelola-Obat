<?php
ob_start();
include("connection/connect.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($connect,"SELECT 
			pengguna.`id`,
			pengguna.`username`,
			pengguna.`password`
			
				
		
		FROM pengguna
		WHERE pengguna.`username`='$username' 
		AND pengguna.`password`=md5('$password')");



	if(mysqli_num_rows($sql)==1)//Apabila username dan userpass benar
	{
		$data=mysqli_fetch_array($sql);
		session_start();
		

		$_SESSION['sudahlogin']=true;
		$_SESSION['pengguna']=$data['username'];//isi variabel username
		header("Location:beranda.php");
		
		
		
		
		
		
	}
	
	
	else
	{
		header("Location:not_found.php");//pindah ke halaman gagallogin.php
	}

	ob_end_flush();
	?>
