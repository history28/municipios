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
.Estilo6 {	font-size: 14pt;
	font-weight: bold;
	color: #333333;
}
body,td,th {
	font-size: 12pt;
	color: #333333;
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
.Estilo7 {
	color: #CCCCCC;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
  	  include("../models/connec.php");
	  include("templates/header.php");
	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#EBEBEB">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo6">Relacion de reclamos </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <span class="letra1">
	  </span>
	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  
	  
	  <table width="800" border="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;Queja</td>
            <td>&nbsp;Fecha</td>
            <td>&nbsp;Adhesiones</td>
            <td>&nbsp;</td>
            <td>&nbsp;Para</td>
          </tr>
	    <tr>
<?
$estilo=$_GET["estilo"];

//$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha, apoyos, autor, idautor FROM tienda WHERE estilo like '$estilo%' order by apoyos DESC, camp0 DESC limit 0,15", $dbh);
$result = mysql_query("SELECT camp0, idcant, nombre, descripcion, estilo, decada, precio, foto, precio1, fecha, apoyos, autor, idautor FROM tienda order by apoyos DESC, camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($result);
if ($filas=="")
{
?>
	  <tr>
		<td colspan="6">Todavia no hay reclamos en el sistema, aqui puedes realizar reclamos, se el primero en publicar.		</td>
	  </tr>
<?
}
Else
{
?>

	  <td colspan="6"><hr /></td>
	  </tr>

<?
	while($row = mysql_fetch_array($result))
	{
		$varfoto = $row["foto"];
		if ($varfoto=="")
		{
			$varfoto = "Sin_imagen.png";
		}


$varcant = $row["idcant"];
$resultcan = mysql_query("SELECT camp0, id1, nombre, estilo, decada, foto FROM cantantes WHERE camp0 = '$varcant' order by camp0 DESC limit 0,15", $dbh);
$filas = mysql_num_rows($resultcan);
$resultcan1 = mysql_result($resultcan, 0, 2 );   //0 es el row, 1 es el campo   
$resultcan2 = mysql_result($resultcan, 0, 3 );   //0 es el row, 1 es el campo   
$resultcan3 = mysql_result($resultcan, 0, 0 );   //0 es el row, 1 es el campo   


		?>
          <tr>
            <td width="160"><a href="producto1.php?id=<?php	echo $row["camp0"]; ?>">
			<img src="fotos/<? echo $varfoto; ?>" width="80" border="1" /></a></td>
            <td>
				<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><span class="Estilofont1">
              <?php	echo $row["nombre"]; ?>
            </span></a>			</td>
            <td><?php	echo $row["fecha"]; ?>
            </td>
            <td align="center">&nbsp;
			<span class="Estilo7"><a href="adhe1.php?id=<?php	echo $row["camp0"]; ?>">
			<?php	echo $row["apoyos"]; ?>
			</a></span></td>
            <td>
			<a href="producto1.php?id=<?php	echo $row["camp0"]; ?>"><img src="img/boton3.png" width="130" height="25" border="0" />			</a></td>
            <td align="center"><a href="artista1.php?id=<?php echo $resultcan3; ?>">
			<?php echo $resultcan1; ?>			</a>			</td>
          </tr>
		  <tr>
		    <td colspan="6"><hr /></td>
		  </tr>
    <?php
	}
}

	?>
        </table>
          <br /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  	<?
		if ($idus=="")
		{
	  	?>
		  <a href="entra.php?idartis=<?php echo $id; ?>"></a>
	  	<?
		}
		else
		{
	  	?>
		  <a href="publica2.php?idartis=<?php echo $id; ?>"></a>
	  	<?
		}
	  //echo $idus; 
	  ?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <?
	  	  $fecha2 =  date("D-j-n-Y");
		  //echo $fecha2;

		$fecha2 =  date("Ymd");   //formato con cero al inicio
		$fechadia = substr($fecha2,6,2);  //imprime drid
		$fechames = substr($fecha2,4,2);  //imprime drid
		$fechaano = substr($fecha2,0,4);  //imprime drid
		
		if ($fechames=="01"){ $fechames1 = "Ene";   }
		if ($fechames=="02"){ $fechames1 = "Feb";   }
		if ($fechames=="03"){ $fechames1 = "Mar";   }
		if ($fechames=="04"){ $fechames1 = "Abr";   }
		if ($fechames=="05"){ $fechames1 = "May";   }
		if ($fechames=="06"){ $fechames1 = "Jun";   }
		if ($fechames=="07"){ $fechames1 = "Jul";   }
		if ($fechames=="08"){ $fechames1 = "Ago";   }
		if ($fechames=="09"){ $fechames1 = "Set";   }
		if ($fechames=="10"){ $fechames1 = "Oct";   }
		if ($fechames=="11"){ $fechames1 = "Nov";   }
		if ($fechames=="12"){ $fechames1 = "Dic";   }
		
		$fecha1 = $fechadia . " ". $fechames1 ." ". $fechaano;
		//print $fecha1;

		?>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><a href="artista5a.php?id=<?php echo $id; ?>"></a></td>
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
