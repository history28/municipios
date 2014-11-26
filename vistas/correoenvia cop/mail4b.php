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
	$mail->From = "ad-vance2009@hotmail.com";
	//$mail->FromName = "Amigos en Lima";   //sale en nombre del remitente
	$mail->FromName = $_POST['remitente'];
	$mail->Subject = $_POST['asunto'];
	$mail->AddAddress($_POST['destino']);
	//if ($varname != "") {
		//$mail->AddAttachment($vartemp, $varname);
		$mail->AddAttachment($varname);
	//}
	$body = "<strong>Mensaje</strong><br>".$_POST['mensaje'];
	$body.= "<br><a href='http://www.netlima.com/red1/todos.php'>netlima.com</a>";
	$body.= "<BR><BR><strong>Nick:</strong> ".$_POST['DA1'];
	$body.= "<br><strong>Nombre:</strong> ".$_POST['DA2']."<BR>";
	$body.= "<br><a href='http://www.netlima.com/red1/todos.php'>netlima.com</a>";



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
