<?php
//Sistem Informasi ini berbasis OPEN SOURCE dengan lisensi GNU/GPL. 
//
//OPEN SOURCE HAJIROBE dengan segala hormat tidak bertanggung jawab dan tidak memiliki pertanggungjawaban
//kepada apapun atau siapa pun akibat terjadinya kehilangan atau kerusakan yang mungkin muncul yang berasal
//dari buah karya ini.
//
//Sistem Informasi ini akan selalu dikembangkan dan jika ditemukan kesalahan logika ataupun kesalahan program,
//hal ini bukanlah disengaja. Melainkan hal tersebut adalah salah satu dari tahapan pengembangan lebih lanjut. 

//Sistem Informasi Sekolah (SISFOKOL) untuk SLTP v1.0, dikembangkan oleh OPEN SOURCE HAJIROBE (Agus Muhajir).
//Dan didistribusikan oleh BIASAWAE PRODUCTION (http://www.biasawae.com)
//
//Bila Anda mempunyai pertanyaan, komentar, saran maupun kritik layangkan saja ke hajirodeon@yahoo.com .
//Semoga program ini berguna bagi Anda.
//
//Ikutilah perkembangan terbaru Sistem Informasi ini di BIASAWAE PRODUCTION.

session_start();

///cek session
include("include/cek.php"); 

//ambil nilai konfigurasi tertentu
include("../include/config.php"); 

//koneksi
require_once('../Connections/sisfokol.php'); 

//fungsi-fungsi
include("../include/function.php"); 

//ambil nilai
$pegawai = cegah($_POST['pegawai']);
$jml = cegah($_POST['jml']);
$satuan = cegah($_POST['satuan']);
$waktu = cegah($_POST['waktu']);
$ket = cegah($_POST['ket']);


//cek, sudah ada belum
$SQL1 = sprintf("SELECT * FROM pegawai_cuti WHERE kd_pegawai = '$pegawai'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs1 = mysql_query($SQL1, $sisfokol) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($Rs1);
$totalRows_rs1 = mysql_num_rows($Rs1);

//jika iya
if ($totalRows_rs1 != 0) 
	{
	$pesan = "Pegawai Tersebut sudah Cuti, Silahkan diganti!";
	$kembali = "kepg_pegawai_cuti.php";
	
	echo "<script>alert('$pesan');location.href='$kembali'</script>";
	}

else
	{
	
//perintah SQL : masukkan data cuti pegawai
$SQL2 = sprintf("INSERT INTO pegawai_cuti(kd, kd_pegawai, jml, kd_satuan, waktu, ket) ".
					"VALUES ('$x', '$pegawai', '$jml', '$satuan', '$waktu', '$ket')");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs2 = mysql_query($SQL2, $sisfokol) or die(mysql_error());

//diskonek
mysql_close($sisfokol);

//auto-kembali
header("location:kepg_pegawai_cuti.php");
}
?>