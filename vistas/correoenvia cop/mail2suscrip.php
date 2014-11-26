<?php
require("class.phpmailer.php");
$msg = "";
if ($_POST['action'] == "send") {
	$varname = "prueba.doc";
    $vartemp = "/";
	//$varname = $_FILES['archivo']['name'];
    //$vartemp = $_FILES['archivo']['tmp_name'];
	
	$mail = new PHPMailer();
	//$mail->Host = "localhost";
	$mail->Host = "http://www.netlima.com"; 
	$mail->From = "espaelm@gmail.com";
	$mail->FromName = "Mensaje de Netlima";   //sale en nombre del remitente
	$mail->Subject = $_POST['asunto'];
	$mail->AddAddress($_POST['destino']);
	//if ($varname != "") {
		//$mail->AddAttachment($vartemp, $varname);
		$mail->AddAttachment($varname);
	//}
	$body = "¡Enhorabuena! Se ha confirmado su suscripción a nuestra lista <a href='http://www.netlima.com'>www.netlima.com</a><br>".$_POST['mensaje'];
	$body.= "<BR>";
	$body.= "<BR>Nuestros saludos y deseos de Exito";
	$body.= "<BR>";
	$body.= "<BR>Para su registro, ésta es una copia de la información que nos proporcionó...";
	$body.= "<BR>Nombre: ".$_POST['DA1'];
	$body.= "<BR>Email: ".$_POST['destino'];
	$body.= "<BR>";
	$body.= "<BR>Si en algún momento desea dejar de recibir nuestros mensajes, puede hacerlo aquí:";
	$body.= "<BR><a href='http://www.netlima.com/cancelar'>Cancelar suscripcion</a> o nos puede enviar un Email con el asunto unsubscribe";
	$body.= "<BR>";

	//$body.= "<BR><strong>vartemp:</strong>".$vartemp;   //no se bien
	//$body.= "<BR><strong>varname:</strong>".$varname;   //nombre del archivo adjunto

	$body.= "<br><i>Enviado por http://www.netlima.com</i>";
	$body.= "<br><i>Puede ponerse en contacto con nosotros en contacto@netlima.com</i>";
	$body.= "<br><a href='http://www.netlima.com'><img src='http://netlima.com/imagenes/LOGO21.gif' width='218' height='65' border='0'/></a>";



	$mail->Body = $body;
	$mail->IsHTML(true);
	$mail->Send();
	$msg = "Mensaje enviado correctamente";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP Email Attach</title>
<link href="mailattach.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?
	$nom1 = $_POST['DA1'];
	$correo1 = $_POST['destino'];
	$camp1 = $_POST['varcamp0'];
	$tipo = $_POST['DA2'];
	//print "nom1 ".$nom1;
	//print "correo1 ".$correo1;
	$fecha1 =  date("j-n-Y");
	$fechan =  date("Ymd");
	$hora2 =  date("h : i : s");

	//include("connec.php");

	?>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="descdet">
	<div class="borde">
	<strong class="subder">Email enviado</strong><br>
	datos de formulario. <br>
	<?php if ($msg != "") { ?><span class="conf"><?php echo $msg; ?></span><br><?php } ?>
	</div></td>
  </tr>
</table>
</body>
</html>
