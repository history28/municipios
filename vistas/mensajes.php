<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<MMString:LoadString id="insertbar/formsTextfield" />
</title>
<link href="css/plantillainic.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-size: 12pt;
	color: #666666;
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
.estiloform {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	background-color:#999999;
}

.Estilo1 {
	font-size: 16pt;
	font-weight: bold;
}
.Estilo6 {font-size: 14pt;
	font-weight: bold;
	color: #000000;
}
-->
</style>
<!-- Copyright 2000,2001 Macromedia, Inc. All rights reserved. -->
<!-- Copyright 2000,2001 Macromedia, Inc. All rights reserved. -->
</head>

<body>
<div class="contenedor">
	<div class="cabezera">
	  <?
	  include("templates/header.php");
  	  include("../models/connec.php");
	  $idprod=$_GET["id"];
	  $flag=$_GET["flag"];
	  $pregunta=$_GET["pregunta"];

	  ?>
	</div>
<div class="cuerpo">
<div class="cuerpoi">
</div>
<div class="cuerpoc">
  <p>
    <span class="Titulo1">Para: 
	<a href="#">Municipalidad de <? //echo $resultcan2; ?></a> - <a href="artista1.php?id=<? echo $varcant; ?>"><? echo $resultcan1; ?></a> </span>
  <table width="800" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <span class="Titulo1">Queja:</span>
	  <span class="Estilo1"> <? echo $result2; ?></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="Estilo1">Mensajes recibidos </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="500" border="0" cellpadding="3" cellspacing="0">
        <?
$result = mysql_query("SELECT camp0, idprod, idautorori, nomautorori, preg, fecha FROM mensajes WHERE idautordes = '$idus' order by camp0 DESC limit 0,15", $dbh);
	while($row = mysql_fetch_array($result))
	{
	?>
        <tr>
          <td>&nbsp; <span class="Estilofont1">
            <?php	echo $row["preg"]; ?>
          </span> </td>
          <td>&nbsp; <?php //echo $row["idautorori"]; ?> <a href="perfil1.php?id=<? echo $row["idautorori"];?>" target="_blank"> <?php echo $row["nomautorori"]; ?></a> </td>
          <td>.</td>
        </tr>
        <?php
	}
	?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
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
