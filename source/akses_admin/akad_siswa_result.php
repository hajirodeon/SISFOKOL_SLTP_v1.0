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

//konek db
require_once('../Connections/sisfokol.php');

//fungsi-fungsi
include("../include/function.php"); 

//ambil nilai
$pageNum_rs1  = cegah($_REQUEST["pageNum_rs1"]);
$totalRows_rs1  = cegah($_REQUEST["totalRows_rs1"]);
$kat = cegah($_POST['kat']);
$cari = cegah($_POST['cari']);

$currentPage = $HTTP_SERVER_VARS["PHP_SELF"];

$maxRows_rs1 = 20;
$pageNum_rs1 = 0;
if (isset($HTTP_GET_VARS['pageNum_rs1'])) {
  $pageNum_rs1 = $HTTP_GET_VARS['pageNum_rs1'];
}
$startRow_rs1 = $pageNum_rs1 * $maxRows_rs1;

mysql_select_db($database_sisfokol, $sisfokol);

//kategori pencarian
switch ($kat) {
	case nis:   
		$query_rs1 = "SELECT * FROM m_siswa ".
						"WHERE nis LIKE '%$cari%' ORDER BY nis ASC";
		break;
	
	case nama:
		$query_rs1 = "SELECT * FROM m_siswa ".
						"WHERE nama LIKE '%$cari%' ORDER BY nis ASC";
		break;
}
					
$query_limit_rs1 = sprintf("%s LIMIT %d, %d", $query_rs1, $startRow_rs1, $maxRows_rs1);
$rs1 = mysql_query($query_limit_rs1, $sisfokol) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($rs1);

if (isset($HTTP_GET_VARS['totalRows_rs1'])) {
  $totalRows_rs1 = $HTTP_GET_VARS['totalRows_rs1'];
} else {
  $all_rs1 = mysql_query($query_rs1);
  $totalRows_rs1 = mysql_num_rows($all_rs1);
}
$totalPages_rs1 = ceil($totalRows_rs1/$maxRows_rs1)-1;

$queryString_rs1 = "";
if (!empty($HTTP_SERVER_VARS['QUERY_STRING'])) {
  $params = explode("&", $HTTP_SERVER_VARS['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs1") == false && 
        stristr($param, "totalRows_rs1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs1 = "&" . implode("&", $newParams);
  }
}
$queryString_rs1 = sprintf("&totalRows_rs1=%d%s", $totalRows_rs1, $queryString_rs1);
?>
<html>
<head>
<title>Hasil Pencarian Siswa</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="REFRESH" CONTENT="<?php echo $lama_akses;?>;URL=../logout.php">
<link href="style/admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="5" topmargin="5" marginwidth="0" marginheight="0">
<div align="center">
  <?php include("include/header.php"); ?>
  <?php include("include/menu.php"); ?>
  <br>
  <table width="990" height="400" border="0" cellpadding="0" cellspacing="0">
    <tr valign="top"> 
      <td> 
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%"><a href="akad_siswa.php">Data Siswa</a> &gt; Hasil 
              Pencarian Siswa</td>
            <td width="54%"><div align="right"></div></td>
          </tr>
        </table>
        <p><img src="images/hasil_pencarian.gif" width="306" height="40"> 
        <p>
          <?php
///nek isih kosong
	if ($totalRows_rs1 == 0)
		{?>
        <table width="100%" height="300" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td><font color="#FF0000"><strong>TIDAK ADA DATA SISWA</strong></font></td>
  </tr>
</table>
        <?
		}	
	
	else if ($totalRows_rs1 != 0)//nek eneng isine...
	  	{ 
	?></p>
        <p><font color="#000000">Total :<font color="#FF0000"> <? echo "$totalRows_rs1";?> 
          </font>Siswa</font></p>
        <table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#66CCCC">
          <tr> 
            <td width="14%"><font color="#FFFFFF"><strong>NIS</strong></font></td>
            <td width="45%"><font color="#FFFFFF"><strong>Nama</strong></font></td>
            <td width="41%"><font color="#FFFFFF">&nbsp;</font></td>
          </tr>
        </table>
        <table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC">
          <?php 	
		do { 
		
		
		if ($warna_set ==0)
			{
			$warna = '#F8F8F8';
			$warna_set = 1;
			}
		
		else
			
			{
			$warna = '#F0F4F8';
			$warna_set = 0;
			}
		?>
          <tr valign="top" bgcolor="<? echo $warna; ?>"> 
            <td width="14%"> 
              <?php 
			echo $row_rs1['nis']; 
			?> </td>
            <td width="45%"> 
              <?php 
			echo $row_rs1['nama']; 
			?> </td>
            <td width="41%">[<a href="javascript:MM_openBrWindow('akad_siswa_detail.php?kd=<?php echo $row_rs1['kd']; ?>','','width=500,height=250,toolbar=no,menubar=no,location=no,scrollbars=yes,resize=no')">DETAIL</a> 
              | <a href="javascript:MM_openBrWindow('akad_siswa_print.php?kd=<?php echo $row_rs1['kd']; ?>','','width=500,height=250,toolbar=no,menubar=no,location=no,scrollbars=yes,resize=no')">PRINT</a> 
              | <a href="akad_siswa_del.php?kd=<?php echo $row_rs1['kd']; ?>">HAPUS</a>]</td>
          </tr>
          <?php } while ($row_rs1 = mysql_fetch_assoc($rs1)); ?>
        </table>
        <p> </p>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr> 
            <td>
              <?php if ($pageNum_rs1 > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_rs1=%d%s", $currentPage, 0, $queryString_rs1); ?>">Awal</a> 
              <?php 
		  		}
		  else
		  		{
				?>
              <font color="#CCCCCC">Awal</font> 
              <?
		  } // Show if not first page ?>
              <?php if ($pageNum_rs1 > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_rs1=%d%s", $currentPage, max(0, $pageNum_rs1 - 1), $queryString_rs1); ?>">Sebelumnya</a> 
              <?php 
		  		}
		  else
		  		{
				?>
              <font color="#CCCCCC">Sebelumnya</font> 
              <?
		  } // Show if not first page ?>
              <?php if ($pageNum_rs1 < $totalPages_rs1) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_rs1=%d%s", $currentPage, min($totalPages_rs1, $pageNum_rs1 + 1), $queryString_rs1); ?>">Selanjutnya</a> 
              <?php 
		  		}
		  else
		  		{?>
              <font color="#CCCCCC">Selanjutnya</font> 
              <?
		  } // Show if not last page ?>
              <?php if ($pageNum_rs1 < $totalPages_rs1) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_rs1=%d%s", $currentPage, $totalPages_rs1, $queryString_rs1); ?>">Terakhir</a> 
              <?php 
		  		}
		  else
		  		{?>
              <font color="#CCCCCC">Terakhir</font> 
              <?
		  } // Show if not last page 
		  }
		  
		  ?>
            </td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <br>
  <?php include("include/footer.php"); ?>
</div>
</body>
</html>
<?php
mysql_close($sisfokol);
?>