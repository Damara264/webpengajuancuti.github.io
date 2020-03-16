<?php
	include("sess_check.php");
		$id = $_GET['npp'];	
		$sql = "DELETE FROM cuti WHERE no_cuti='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: karyawan.php?act=delete&msg=success");
?>