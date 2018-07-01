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

//ambil nilai
$kelkod = cegah($_REQUEST['kelkod']);
?>
<html>
<head>
<title>Data Pelajaran</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="REFRESH" CONTENT="<?php echo $lama_akses;?>;URL=../logout.php">
<link href="style/admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
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
      <td> <p><img src="images/adm_m_akad_pelajaran.gif" width="193" height="40"></p>
        <p>(<a href="akad_pelajaran_add.php">Tambah Pelajaran</a>)</p>
        <p> Kelas : <br>
          <select name="kelas" id="kelas" onChange="MM_jumpMenu('parent',this,0)">
            <?
			//kelas
			mysql_select_db($database_sisfokol, $sisfokol);
			$query_rs_kelas = "SELECT * FROM m_kelas";
			$rs_kelas = mysql_query($query_rs_kelas, $sisfokol) or die(mysql_error());
			$row_rs_kelas = mysql_fetch_assoc($rs_kelas);
			$totalRows_rs_kelas = mysql_num_rows($rs_kelas);			
			?>
            <?
			if ($kelkod == "")
				{
				echo "<option selected>--Pilih Kelas--</option>";
				}
				
			else
			
				{
				?>
            <option selected> 
            <?
			//kelas terpilih
			mysql_select_db($database_sisfokol, $sisfokol);
			$query_rs_terkel = "SELECT * FROM m_kelas WHERE kd = '$kelkod'";
			$rs_terkel = mysql_query($query_rs_terkel, $sisfokol) or die(mysql_error());
			$row_rs_terkel = mysql_fetch_assoc($rs_terkel);
			$totalRows_rs_terkel = mysql_num_rows($rs_terkel);			
			?>
            <? echo $row_rs_terkel['kelas']; ?></option>
            <?
				}
			?>
            <?
			do 
				{  
				?>
            <option value="akad_pelajaran.php?kelkod=<? echo $row_rs_kelas['kd'] ?>&kelas=<? echo $row_rs_kelas['kelas'] ?>"><? echo $row_rs_kelas['kelas']?></option>
            <?
				} 
		
			while ($row_rs_kelas = mysql_fetch_assoc($rs_kelas));
			
			$rows = mysql_num_rows($rs_kelas);
  				if($rows > 0) 
						{
      					mysql_data_seek($rs_kelas, 0);
						$row_rs_kelas = mysql_fetch_assoc($rs_kelas);
  						}
		?>
          </select>
          <br>
          <br>
          
        </p>
    
        <?php
			if ($_REQUEST['kelkod'] == "")
				{
				?>
        <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td><font color="#FF0000"><strong>Kelas belum dipilih</strong></font></td>
  </tr>
</table>
        <?
				} 
			
			else
				{
mysql_select_db($database_sisfokol, $sisfokol);

$query_rs1 = "SELECT * FROM m_pelajaran ".
				"WHERE kd_kelas = '$kelkod' ".
				"ORDER BY pelajaran ASC";
$rs1= mysql_query($query_rs1, $sisfokol) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($rs1);
$totalRows_rs1 = mysql_num_rows($rs1);
?>
        <? ///nek isih kosong
	if ($totalRows_rs1 == 0)
		{
		?>
        <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td><strong><font color="#FF0000">TIDAK ADA DATA PELAJARAN</font></strong></td>
  </tr>
</table>
        <?php
		}	
	
	else if ($totalRows_rs1 != 0)//nek eneng isine...
	  	{ 
	?>
        <br>
        </p>
        <table width="500" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#66CCCC">
          <tr> 
            <td width="24"><font color="#FFFFFF"><strong>No.</strong></font></td>
            <td width="462"><font color="#FFFFFF"><strong>Pelajaran</strong></font></td>
          </tr>
        </table> 
        <table width="500" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
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
            <td width="23"><?php
						  $nomer = $nomer + 1;
			  echo "$nomer. ";
			?>
            </td>
            <td width="463">
              <?php 
			  
			echo balikin($row_rs1['pelajaran']); 
			?>
              <strong> </strong> [<a href="akad_pelajaran_del.php?kd=<?php echo $row_rs1['kd']; ?>&kelkod=<?php echo $row_rs1['kd_kelas']; ?>">HAPUS</a>]</td>
          </tr>
          <?php } while ($row_rs1 = mysql_fetch_assoc($rs1)); ?>
        </table>
		
		<?php
		}
		}
		?>
		
		
		</td>
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