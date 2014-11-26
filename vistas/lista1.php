<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #0099CC;
	font-weight: bold;
	font-size: 14pt;
}
.Estilo5 {font-size: 12pt}
body,td,th {
	font-size: 10pt;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo2 {font-size: 14px}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  $letra=$_GET["letra"];
	  $deca=$_GET["deca"];
	  $estilo=$_GET["estilo"];
	  include("templates/header.php");
  	  include("../models/connec.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td valign="top"><table width="600" border="0" cellpadding="2" cellspacing="0" bordercolor="#999999">
        <?
	$cuenta = 0;
	$result = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE estilo = '$estilo' AND i1 = '0'  AND pase = '0' order by nombre limit 0, 88", $dbh);
	while ($row = mysql_fetch_row($result)){
		$cuenta = $cuenta + 1;
		if 	($cuenta==2)
		{
			$cuenta = 0;
			$colortr = "#FFFFFF";
		}
		else
		{
			$colortr = "#EBEBEB";
		}
 		?>
        <tr>
          <td align="left" colspan="3"><span class="Estilo2"> <a href="artista1.php?id=<?php echo $row[0]; ?>"><? echo $row[9]; ?> &nbsp; <? echo $row[1]; ?></a>&nbsp;
                <?  //examenes
					$var1 = $row[0];
					$varex = $row[0];
					?>
          </span></td>
        </tr>
        <?  //subcategorias
		$resultx = mysql_query("SELECT camp0, nombre, i1, i2, i3, i4 FROM cantantes WHERE i1 = '$var1' order by  camp0 limit 0, 88", $dbh);
		$filas = mysql_num_rows($resultx);
		if ($filas!="")
		{ 
			while ($rowx = mysql_fetch_row($resultx)){  //while de subcateg
			?>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><span class="Estilo2">&nbsp; <a href="artista1.php?id=<?php echo $rowx[0]; ?>"> <? echo $rowx[1]; ?> </a> &nbsp;</span></td>
          <?
									// sub sub categorias
									$var2 = $rowx[0];
									$resulty = mysql_query("SELECT camp0, categ, i1, i2, i3, i4, nomcurso, grado, peso FROM cur2_prof WHERE i2 = '$var2' AND i3 = '0' order by categ limit 0, 88", $dbh);
									$filas = mysql_num_rows($resulty);
									if ($filas!="")
									{ ?>
          <?
										while ($rowy = mysql_fetch_row($resulty)){   //while de sub sub categ
											//echo "<br>- Examen -".$rowy[1];
											?>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><span class="Estilo2">&nbsp;<? echo $rowy[1]; 
						
												$varex = $rowy[0];
												?> &nbsp;</span></td>
          <?
										}              //fin del while de sub sub
										?>
          <?
									}              //fin del if sub sub
									?>
          <?
						}          //fin del while de subcateg
						?>
          <?
					}              //fin del if de subcateg
					?>
          <?
			}
			?>
        </tr>
      </table></td>
      <td valign="top"><table width="200" border="0">
        <tr>
          <td>Provincias&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
	<?
	$estilo=$_GET["estilo"];
	
	$result = mysql_query("SELECT camp0, idestilo, nombre FROM estilos order by nombre limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td height="30">&nbsp;
				<a href="lista1.php?estilo=<?php	echo $row["nombre"]; ?>"><span class="Estilofont1">
              	<?php	echo $row["nombre"]; ?>
            </span></a>			</td>
          <td>&nbsp;</td>
        </tr>
    <?php
	}
	?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="nuevoperso.php?estilo=<?php echo $estilo; ?>"></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</div>

</body>
</html>
