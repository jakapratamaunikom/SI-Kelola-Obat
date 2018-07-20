<?php
$host = "localhost";
$db = "si_kelola_obat";
$pass = "";
$username = "root"; 

$connect = mysqli_connect($host, $username, $pass, $db);

if(mysqli_connect_errno()){
	echo 'Gagal Terhubung dengan Database : '. mysqli_connect_error();
}
	else{
	
	}

		function control(){
		if(isset($_GET['page']))
		{
			//ALL
			switch ($_GET['page']) 
			{	
				case 'edit-obat': include('edit.php');
				break;
			}

	
		}
		else{
			include ('beranda.php');
		}
	}

			
?>