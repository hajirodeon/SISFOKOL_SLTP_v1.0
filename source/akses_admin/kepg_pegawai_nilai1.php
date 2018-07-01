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

//koneksi db
require_once('../Connections/sisfokol.php'); 

//fungsi-fungsi
include("../include/function.php"); 

//ambil nilai
$kd_pegawai  = cegah($_REQUEST["kd_pegawai"]);
$setiakod  = cegah($_REQUEST["setiakod"]);
$prestkod  = cegah($_REQUEST["prestkod"]);
$tangkod  = cegah($_REQUEST["tangkod"]);
$kejukod  = cegah($_REQUEST["kejukod"]);
$kerjkod  = cegah($_REQUEST["kerjkod"]);
$prakarkod  = cegah($_REQUEST["prakarkod"]);
$kepemkod  = cegah($_REQUEST["kepemkod"]);


//////////////////////////// UPDATE Kesetiaan //////////////////////////////////////////////////////////
if ($setiakod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET kesetiaan = '$setiakod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}


//////////////////////////// UPDATE Prestasi Kerja//////////////////////////////////////////////////////////
else if ($prestkod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET prestasi_kerja = '$prestkod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}

	
//////////////////////////// UPDATE Tanggung Jawab//////////////////////////////////////////////////////////
else if ($tangkod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET tanggung_jawab = '$tangkod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}


//////////////////////////// UPDATE Kejujuran//////////////////////////////////////////////////////////
else if ($kejukod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET kejujuran = '$kejukod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}

//////////////////////////// UPDATE Kerja Sama//////////////////////////////////////////////////////////
else if ($kerjkod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET kerja_sama = '$kerjkod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}


//////////////////////////// UPDATE Prakarsa//////////////////////////////////////////////////////////
else if ($prakarkod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET prakarsa = '$prakarkod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}


//////////////////////////// UPDATE Kepemimpinan//////////////////////////////////////////////////////////
else if ($kepemkod != "")
	{
	//update-kan baru
	mysql_select_db($database_sisfokol, $sisfokol);

	$query_rsupdate = "UPDATE pegawai_nilai SET kepemimpinan = '$kepemkod' ".
						"WHERE kd_pegawai = '$kd_pegawai'";
					
	$rsupdate = mysql_query($query_rsupdate, $sisfokol) or die(mysql_error());
		
	$returner = "kepg_pegawai_nilai.php";
	header("location:$returner");
	}

//diskonek
mysql_close($sisfokol);
?>