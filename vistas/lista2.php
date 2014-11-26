<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.Estilofont1 {
font-size: 16px;
font-family: 'Oswald', 'sans-serif';
}
body {
  font-family: 'Cuprum', serif;
  font-size: 48px;
}

.Estilo5 {
	font-size: 12pt
  font-family: 'Cuprum', serif;
  font-size: 24px;
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
body,td,th {
	font-size: 10pt;
}
-->
</style>
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
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
      <td width="270"><span class="Estilo5">B&uacute;squeda por Candidatos </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
          <tr>
            <td>&nbsp;</td>
            <td><a href="lista1.php?estilo=Municipales" class="Estilofont1">Municipales</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="lista1.php?estilo=Al congreso" class="Estilofont1">Al congreso </a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="lista1.php?estilo=Al ejecutivo" class="Estilofont1">Al ejecutivo </a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo5">B&uacute;squeda por Autoridades </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
<?
$result = mysql_query("SELECT camp0, idestilo, nombre, descripcion FROM estilos order by orden DESC, nombre limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
<a href="lista1.php?estilo=<?php	echo $row["nombre"]; ?>"><span class="Estilofont1">
              <font size="4"><?php	echo $row["nombre"]; ?></font>
            </span></a>			</td>
          </tr>
    <?php
	}
	?>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="270"><span class="Estilo5">B&uacute;squeda por Servicios </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="0">
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=50" class="Estilofont1">Telecomunicaciones</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=60" class="Estilofont1">TV</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=70" class="Estilofont1">Agua</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=80" class="Estilofont1">Luz</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=90" class="Estilofont1">Impuestos</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=90" class="Estilofont1">Prensa</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=90" class="Estilofont1">Educacion</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="lista1.php?deca=2000" class="Estilofont1">Otros</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
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
