<? session_start();
require("correoenvia/class.phpmailer.php");
$msg = "";


	$nick=$_POST["nick"];
	$login=$_POST["login"];
	$pass=$_POST["pass"];
	$pais=$_POST["pais"];
	$ciudad=$_POST["ciudad"];
	$retorno=$nick."12";

	include("../models/connec.php");
	$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado FROM usuarios WHERE email = '$login' order by camp0 DESC limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	if ($filas!="")
	{
		print "EMAIL DUPLICADO";
		exit();
	}
	$result = mysql_query("SELECT camp0, nombre, email, pass, pais, prov, nombrereal, dni, face, verificado FROM usuarios WHERE nombre = '$nick' order by camp0 DESC limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	if ($filas!="")
	{
		print "LOGIN DUPLICADO";
		exit();
	}



	$varname = "prueba.doc";
    $vartemp = "/";
	//$varname = $_FILES['archivo']['name'];
    //$vartemp = $_FILES['archivo']['tmp_name'];
	
	$mail = new PHPMailer();
	//$mail->Host = "localhost";
	$mail->Host = "http://www.perudebates.com"; 
	$mail->From = "jonyjony1982@hotmail.com";
	$mail->FromName = "Mensaje de Top-Dialog";   //sale en nombre del remitente
	$mail->Subject = "Bienvenido1";
	$mail->AddAddress($_POST['login']);
	//if ($varname != "") {
		//$mail->AddAttachment($vartemp, $varname);
		$mail->AddAttachment($varname);
	//}
	$body = "¡Enhorabuena! Se ha confirmado su suscripción a nuestra lista <a href='http://localhost/muni1/vistas/uservalida.php?ret=".$_POST['login']."'>CLIC AQUI PARA CONFIRMAR</a><br>".$_POST['mensaje'];
	$body.= "<BR>";
	$body.= "<BR>sI NO PUEDE VER EL LINK pegue este codigo en su navegador:";
	$body.= "<BR>";
	$body.= "<BR>http://localhost/muni1/vistas/uservalida.php?ret=".$_POST['login']."";
	$body.= "<BR>";
	$body.= "<BR>";
	$body.= "<BR>Para su registro, ésta es una copia de la información que nos proporcionó...";
	$body.= "<BR>Clave: ".$_POST['pass'];
	$body.= "<BR>Email: ".$_POST['login'];
	$body.= "<BR>";
	$body.= "<BR>Si en algún momento desea dejar de recibir nuestros mensajes, puede hacerlo aquí:";
	$body.= "<BR><a href='http://www.topdialog.com/cancelar'>Cancelar suscripcion</a> o nos puede enviar un Email con el asunto unsubscribe";
	$body.= "<BR>";

	//$body.= "<BR><strong>vartemp:</strong>".$vartemp;   //no se bien
	//$body.= "<BR><strong>varname:</strong>".$varname;   //nombre del archivo adjunto

	$body.= "<br><i>Enviado por http://www.topdialog.com</i>";
	$body.= "<br><i>Puede ponerse en contacto con nosotros en contacto@topdialog.com</i>";


	$mail->Body = $body;
	$mail->IsHTML(true);
	$mail->Send();
	$msg = "Mensaje enviado correctamente";


?>
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
.Estilo2 {font-size: 14pt}
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
  <div id="subcontent"></p>
      <span class="Estilo1">HEMOS RECIBIDO TUS DATOS<BR /><BR />
	  AHORA DEBES INGRESAR A TU E-MAIL PARA VALIDAR TU REGISTRO</span><BR />
	  
<?
			$fecha1 =  date("j-n-Y");

			$strSQL = "INSERT INTO usuarios (";
			$strSQL = $strSQL ."camp0, ";
			$strSQL = $strSQL ."nombre, ";
			$strSQL = $strSQL ."email, ";
			$strSQL = $strSQL ."login, ";
			$strSQL = $strSQL ."pass, ";
			$strSQL = $strSQL ."prov, ";
			$strSQL = $strSQL ."pais, ";
			$strSQL = $strSQL ."fecha, ";
			$strSQL = $strSQL ."retorno, ";
			$strSQL = $strSQL ."id1 ";
			$strSQL = $strSQL .") VALUES (";
			$strSQL = $strSQL ."'', ";
			$strSQL = $strSQL ."'" .$nick."', ";
			$strSQL = $strSQL ."'" .$login."', ";
			$strSQL = $strSQL ."'" .$nick."', ";
			$strSQL = $strSQL ."'" .$pass."', ";
			$strSQL = $strSQL ."'" .$ciudad."', ";
			$strSQL = $strSQL ."'" .$pais."', ";
			$strSQL = $strSQL ."'" .$fecha1."', ";
			$strSQL = $strSQL ."'" .$retorno."', ";
			$strSQL = $strSQL ."'1' )";
			$result = mysql_query($strSQL);
			//echo $strSQL;
//echo $body;  //imprime lo que se envia al email

?>
<p>&nbsp;</p>
  <p><a href="entra.php?id=<? echo $idcant; ?>" class="Estilo2">Regresar</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </div>
</div>
</div>

</body>
</html>
