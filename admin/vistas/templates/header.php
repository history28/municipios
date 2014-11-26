<div class="cabezera">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
		    <td height="80" class="letracabez1"><img src="img/logorock.png" width="250" /> </td>
      <td height="45" class="letracabez2">Version. 1.3 

	  </td>
            <td>
<form id="form1" name="form1" method="get" action="http://www.google.com/ang/busca2b.php" target="_blank">
          <font color="#999999">
		  <?
			$idus = $_SESSION['idUsuario'];
			$logus = $_SESSION['LoginUsuario'];

			//echo $_SESSION['idUsuario'];
			echo " ";
			echo $_SESSION['LoginUsuario'];
			
		  ?>
		  </font>
          <table width="100" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td class="letra_roja">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input id="texbox1" name="q" type="text" class="texbox2"/></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
          </table>
      </form>			</td>
          </tr>
  </table>
</div>
  <div class="cabezera1">
<ul class="menu2">
	<li class="top"><a href="inicio.php" id="home" class="top_link"><span>Inicio</span></a><!--<![endif]-->
	</li>




	<li class="top"><a href="vercateg.php" id="home" class="top_link"><span>Distritos </span></a><!--<![endif]-->
	</li>

	<li class="top"><a href="veruser.php" id="shop" class="top_link"><span>  Usuarios</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>
	<li class="top"><a href="admrespu.php" id="shop" class="top_link"><span> Reclamos y respuestas</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>
	<li class="top"><a href="admadhesion.php" id="shop" class="top_link"><span>  Adhesiones</span></a><!--[if gte IE 7]><!--></a><!--<![endif]-->
	</li>

		<li class="top"><a href="loguser.php?id=<? echo $idus; ?>" id="home" class="top_link"><span>Perfil</span></a>
		</li>


<br />


</ul>			  
</div>

  <div class="cabezera2">
</div>

