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

//mengambil nilai
$kdi = cegah($_REQUEST['kd']);

if (!ctype_alnum($kdi))
	{
	$pesan = "ERROR";
	$kembali = "kepg_pegawai.php";
	
	echo "<script>alert('$pesan');location.href='$kembali'</script>";
	}

else
	{

//menghapus folder foto
$path = "../filebox/pegawai/$kd";
delete ($path);

//perintah SQL : hapus data pegawai
$SQL = sprintf("DELETE FROM m_pegawai WHERE kd = '$kdi'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs = mysql_query($SQL, $sisfokol) or die(mysql_error());


//perintah SQL : hapus data pendidikan pegawai
$SQL1 = sprintf("DELETE FROM pegawai_pddkn WHERE kd_pegawai = '$kdi'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs1 = mysql_query($SQL1, $sisfokol) or die(mysql_error());


//perintah SQL : hapus data cuti
$SQL2 = sprintf("DELETE FROM pegawai_cuti WHERE kd_pegawai = '$kdi'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs2 = mysql_query($SQL2, $sisfokol) or die(mysql_error());

//diskonek
mysql_close($sisfokol);
	
header("location:kepg_pegawai.php");
}

?>