<?php
if(isset($_GET['id_pengaduan'])){
	include('../conn/koneksi.php');
	$id_pengaduan = $_GET['id_pengaduan'];
	$cek = mysqli_query($koneksi, "SELECT id_pengaduan FROM pengaduan WHERE id_pengaduan='$id_pengaduan'") or die(mysqli_error());
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
		if($del){
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="index.php">Kembali</a>';	
		}else{
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>