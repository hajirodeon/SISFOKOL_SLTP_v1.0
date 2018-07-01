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
	
//kosongkan cache
header("cache-control:private");
header("pragma:no-cache");
header("cache-control:no-cache");
flush();  

//ambil nilai konfigurasi tertentu
include("../include/config.php"); 

//koneksi
require_once('../Connections/sisfokol.php'); 

//fungsi-fungsi
include("../include/function.php"); 
?>
<html>
<head>
<title>Tambah Ekstrakurikuler</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="REFRESH" CONTENT="<?php echo $lama_akses;?>;URL=../logout.php">
<link href="style/admin.css" rel="stylesheet" type="text/css">
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function cek(){

if (document.frmekstra.ekstra.value=="") {
alert("Silahkan diisi nama ekstrakurikulernya!")
return false
}

if (document.frmekstra.guru.value=="") {
alert("Guru pengampu belum diisi!")
return false
}

return true
}
// End -->
</SCRIPT>
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="5" topmargin="5" marginwidth="0" marginheight="0">
<div align="center">
  <?php include("include/header.php"); ?>
  <?php include("include/menu.php"); ?>
  <br>
  <table width="990" height="400" border="0" cellpadding="0" cellspacing="0">
    <tr valign="top"> 
      <td> <p><a href="akad_ekstra.php">Data Ekstrakurikuler</a> &gt; Tambah Ekstrakurikuler</p>
        <p><img src="images/adm_m_akad_ekstra_tambah.gif" width="272" height="40"></p>
        <form action="akad_ekstra_add1.php" method="post" name="frmekstra" id="frmekstra" onSubmit="return cek()">
          <p>Nama Ekstrakurikuler : <br>
            <input name="ekstra" type="text" id="ekstra" size="40">
          </p>
          <p>Guru : <br>
            <select name="guru" id="guru">
              <option>--Guru--</option>
              <?php
			//pegawai
mysql_select_db($database_sisfokol, $sisfokol);
$query_rs_guru = "SELECT * FROM m_pegawai ORDER BY nama ASC";
$rs_guru = mysql_query($query_rs_guru, $sisfokol) or die(mysql_error());
$row_rs_guru = mysql_fetch_assoc($rs_guru);
$totalRows_rs_guru = mysql_num_rows($rs_guru);


do {  
?>
              <option value="<?php echo balikin($row_rs_guru['kd']);?>"><?php echo balikin($row_rs_guru['nama']);?></option>
              <?php
} while ($row_rs_guru = mysql_fetch_assoc($rs_guru));
  $rows = mysql_num_rows($rs_guru);
  if($rows > 0) {
      mysql_data_seek($rs_guru, 0);
	  $row_rs_guru = mysql_fetch_assoc($rs_guru);
  }
?>
            </select>
          </p>
          <p> 
            <input name="Reset" type="reset" id="Reset" value="Batal">
            <input name="Submit" type="submit" id="Submit" value="Simpan">
          </p>
        </form>
        <p><strong></strong></p></td>
    </tr>
  </table>
  <br>
  <?php include("include/footer.php"); ?>
</div>
</body>
</html>
<?php
//diskonek
mysql_close($sisfokol);
?>