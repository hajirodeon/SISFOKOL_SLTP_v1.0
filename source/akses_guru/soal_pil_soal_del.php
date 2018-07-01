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
require("include/cek.php"); 

//ambil nilai konfigurasi tertentu
include("../include/config.php"); 

//koneksi
require_once('../Connections/sisfokol.php'); 

//fungsi-fungsi
include("../include/function.php"); 

//mengambil nilai
$kd = cegah($_REQUEST['kd']);
$mpelkd = cegah($_REQUEST['mpelkd']);
$mkelkd = cegah($_REQUEST['mkelkd']);
$mgkd = cegah($_REQUEST['mgkd']);
$tapelkd = cegah($_REQUEST['tapelkd']);
$smtkd = cegah($_REQUEST['smtkd']);
$pelajaran = cegah($_REQUEST['pelajaran']);
$kelas = cegah($_REQUEST['kelas']);

if (!ctype_alnum($kd))
	{
	$pesan = "ERROR";
	$kembali = "../logout.php";
	
	echo "<script>alert('$pesan');location.href='$kembali'</script>";
	}

else
	{



//perintah SQL : hapus soal
$SQL = sprintf("DELETE FROM soal_pilihan_soal WHERE kd = '$kd'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs = mysql_query($SQL, $sisfokol) or die(mysql_error());


//perintah SQL : hapus soal
$SQL1 = sprintf("DELETE FROM soal_pilihan_opsi WHERE kd_soal = '$kd'");

mysql_select_db($database_sisfokol, $sisfokol);
$Rs1 = mysql_query($SQL1, $sisfokol) or die(mysql_error());

//diskonek
mysql_close($sisfokol);

$returner = "soal_pil_soal.php?mgkd=$mgkd&mpelkd=$mpelkd&pelajaran=$pelajaran".
				"&mkelkd=$mkelkd&kelas=$kelas&topikkd=$topikkd&topik=$topik";

header("location:$returner");
}

?>