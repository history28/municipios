<?php

foreach ($_FILES["pictures"]["error"] as $key => $error) {
   if ($error == UPLOAD_ERR_OK) {
       print "error";
       $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
       $name = $_FILES["pictures"]["name"][$key];
       move_uploaded_file($tmp_name, "./files/$name");
//print $tmp_name;
//print $name;
   }
}
print "imagen: " . $imagen;
$imagen = $_GET[imagen]; 


require("class.phpmailer.php");
$msg = "";
if ($_POST['action'] == "send") {
	//$varname = "prueba.doc";
	//$varname = "mailattach.gif";
	$varname = "files/".$name;
    $vartemp = "/files";
	//$varname = $_FILES['archivo']['name'];
    //$vartemp = $_FILES['archivo']['tmp_name'];
	
	$mail = new PHPMailer();
	//$mail->Host = "localhost";
	$mail->Host = "http://www.netlima.com"; 
	$mail->From = "netlima2007@netlima.com";
	$mail->FromName = "Mensaje Elmer";   //sale en nombre del remitente
	$mail->Subject = $_POST['asunto'];
	$mail->AddAddress($_POST['destino']);
	//if ($varname != "") {
		//$mail->AddAttachment($vartemp, $varname);
		$mail->AddAttachment($varname);
	//}
	$body = "<strong>Mensaje</strong><br>".$_POST['mensaje'];
	$body.= "<BR><BR><strong>Nombre:</strong>".$_POST['DA1'];

	$body.= "<BR><strong>vartemp:</strong>".$vartemp;   //no se bien
	$body.= "<BR><strong>varname:</strong>".$varname;   //nombre del archivo adjunto

	$body.= "<br><strong>Apellidos:</strong>".$_POST['DA2']."<BR>";
	$body.= "<br><i>Enviado por http://www.miweb.com</i>";



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
