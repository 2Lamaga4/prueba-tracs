<?php

include("conexion.php");

ini_set('display_errors','off');

$id			= $_GET['id'];
$conecct 	= new conexion();
$camb		= $_GET['camb'];
$pagina		=	$_REQUEST['pagina'];
$confirma = $_GET['confirma'];
$e 			= $_REQUEST['e'];	

//Se conecta a la base de datos

$lista = "SELECT IdUnidadV, Apartamento FROM unidadv
		ORDER BY Apartamento";

$resul = $conecct -> consulta($lista);

			$total_registros		=	mysql_num_rows($resul);
			
			$datos		=	20;
			
						
			if (!$pagina) {
			$inicio=0;
			$pagina=1;
			}
			else{
			$inicio = ($pagina - 1) * $datos; 
			}
			$lista.=" LIMIT $inicio,$datos";		
		//$result_query = mysql_query($mysql_query, $db);
			$resul = $conecct -> consulta($lista);

	$totalpag	  =	ceil($total_registros/$datos);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
	<title>Cassius - software de propiedad horizontal</title>
	<link href="config/estilos_cassius.css" rel="stylesheet"
		type="text/css" />
	<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>

</head>
<script src="Ajaxnuevo.js"></script>
<script>
<?php if($e == 1){?>
alert("Se Elimino la informacion asociada");
<?php }?>

function mostrar(a) {
//alert(a);
if(a =='1'){
		switchMenu('uno');
		switchMenu('dos');
		switchMenu('tres');
		switchMenu2('cuatro');
		switchMenu2('cinco');
		//alert ("Muestra");
	}else{
		switchMenu2('uno');
		switchMenu2('dos');
		switchMenu2('tres');
		switchMenu('cuatro');
		switchMenu('cinco');
		//alert ("Oculta");
	}
}

function switchMenu(obj) {
	var dato = document.forma.busca_reg.value;
	var el = document.getElementById(obj);
		el.style.display = '';
}
function switchMenu2(obj) {
	var el2 = document.getElementById(obj);
		el2.style.display = 'none';
}


function busca(dat){
	var datajax=dat;
	//alert(datajax);
	if(dat.length>0)HayNotasAjax('ajaxbuscar.php','dato='+datajax,'','capa');
}

/*function busca1(){
	var datajax=document.forma.busca_reg.value;
	if(dat.length>0)HayNotasAjax('ajaxbuscar.php','dato='+datajax,'','capa');
}*/



</script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="interna2"
	OnContextMenu="return false" onload="switchMenu('uno');switchMenu('dos');switchMenu('tres');switchMenu2('cuatro');switchMenu2('cinco');MM_preloadImages('images/loading.gif','images/fondo_btn_eliminar_int_roll.jpg','images/fondo_btn_modificar_int_roll.jpg')">
	<div id="salir2">
		<input name="exit" type="button" class="boton_salir" id="exit"
			value="Salir" onclick="location.href='menu_home.php'" />
	</div>
	<div id="logo_small3">
		<img src="images/logo_small2.png" name="logo_small" width="317"
			height="62" id="logo_small" />
	</div>
	<div id="modulos">
		<img src="images/modulo_registro.png" name="mod_registro" width="284"
			height="61" id="mod_registro" />
	</div>
        <?php if($confirma == 1){?>
        <div id="cont_popup"></div>
        <div id="conte_adel" class="popup">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <form name="formulario" id="formulario" method="post">
          <table width="335" height="220" border="0" align="center" background="images/fondo_popup.jpg">
            <tr>
              <td width="318"><table width="322" border="0" align="center">
                <tr>
                  <td height="35" align="right" class="titulos"><a href="viviendas.php?id=<?php echo $id;?>"><img src="images/cerrar.gif" name="finalizar" width="29" height="26" border="0" id="finalizar" onmouseover="MM_swapImage('finalizar','','images/cerrar_roll.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
                </tr>
                <tr>
                  <td height="50" align="center" bgcolor="#04447D" class="titulos_blancos">Confirmación</td>
                </tr>
                <tr>
                  <td width="305" height="64" align="center" class="texto_azul">¿ Esta seguro que desea eliminar toda la información asociada a este apartamento incluyendo propietarios y residentes ?</td>
                </tr>
                <tr>
                  <td height="57" align="center">
                    <input
				style="width: 90px;" name="Entrar2" type="submit"
				class="boton_redondo" id="Entrar2" value="::: Aceptar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"
				/*onclick="this.form.action='epropietario.php?id=<?php echo $id;?>'"*/
				?> 
                onclick="this.form.action='eliminavivienda.php?vivienda=<?php echo $id;?>&pagina=<?php echo $pagina;?>'"
                />
                
                    <input
				style="width: 90px;" name="Entrar3" type="submit"
				class="boton_redondo" id="Entrar3" value="::: Cancelar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"?> onclick="this.form.action='viviendas.php?pagina=<?php echo $pagina;?>'" />
                  </td>
                </tr>
              </table></td>
            </tr>
          </table>
          </form>
          <?php }?>
        </div>
    
<div id="fondo_contenido"></div>

	<div id="utilidades">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			  <td width="56%" align="right"><input name="agregar" type="button"
					class="boton_agregar" id="agregar" value="Agregar"
					onclick="location.href='agregar_vivienda.php'" />
		      &nbsp;</td>
				<?php //<form id="buscar" name="buscar" action="Busca.php">?>
			  <form name="forma" id="forma">
				  <td width="34%"><input name="busca_reg" type="text"
						class="textarea_redondo2" id="busca_reg" style="width: 150px;" onKeyUp="busca(this.value)"  onfocus="mostrar('2')" /></td>
					<td width="10%"><img src="images/icon_buscar2.png" name="icon_busc" width="33" height="28" id="icon_busc" /></td>
				</form>
			</tr>
		</table>
	</div>

<div id="contenido_tabla">
<?php //if($camb==""){ ?>
		<table width="950" border="0" align="center" cellpadding="0"
			cellspacing="0">
			<tr id='uno'>
				<td align="top"><table width="600" border="0" align="center"
						cellpadding="0" cellspacing="2">
						<?php
						while($rowresult = mysql_fetch_array($resul)){
							echo '<tr class="tr_tabla_interna">';
							echo '<td width="414" class="td_tabla_interna">'.$rowresult['Apartamento'].'</td>';
							?>
							<td width="87">
                            <input name="modificar_int" type="submit" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_vivienda.php?id=<?php echo $rowresult['IdUnidadV'] ?>&pagina=<?php echo $pagina;?>'"/></td>
							<td width="87"><?php /*
                  <a onclick="confirmDel(<?php echo $residente; echo ","; echo $apto; echo ","; echo $ori; ?>);">Eliminar</a>*/?>
                     <input name="boton_eliminar_int" type="submit"
											class="boton_eliminar_int" id="boton_eliminar_int"
											value="Eliminar"
                  onclick="location.href='viviendas.php?id=<?php echo $rowresult['IdUnidadV'] ?>&confirma=<?php echo '1';?>&pagina=<?php echo $pagina;?>'"                                        
                                        <?php /* onclick="location.href='viviendas.php?id=<?php echo $rowresult['IdUnidadV'] ?>'"
										
										onclick="MM_openBrWindow('modificar_propietario.php?residente=<?php echo $rowPropietarios['idresidentes']?>&apto=<?php echo $rowPropietarios['IdUnidadV']?>','AgregarPropietario','width=460px,height =530px')"*/?> />  
              
                       </td>
                        
						<?php
							echo '</tr>';
						}
						?>
					</table>
				</td>
			</tr>
			<tr id='dos'>
				<td height="5" align="center"><img src="images/line.gif" width="945"
					height="1" /></td>
			</tr>
			<tr id='tres'>
				<td align="rigth"><table width="30%" border="0" align="right"
						cellpadding="0" cellspacing="1">
						<tr>
						  <td width="30" height="25" align="right"><span class="texto_azul">Página</span>:</td>
                          <td width="30" height="25" class="td_paginacion_resaltado">
                          <?php if($total_registros) {?><?php if(($pagina - 1) > 0) { 
		
		$pag = $pagina-1;
		echo"<a href='viviendas.php?pagina=$pag' class='dos'><<</a>";
		
		}?><?php }?></td>
						  						    <?php
	/* Esta seccion de codigo se ejecuta la paginacion, creando los numeros de pagina que son los enlaces contando los registro qeu se encuentran almacenados en la base*/
	 if($total_registros) {
	  
		
		
		for ($i=1; $i<=$totalpag; $i++){ 
		?>
	  <?php
			if ($pagina == $i) {
				
				$pagina= $pagina; 
		?>
		<td width="20" onclick="document.location.href='viviendas.php?pagina=<?php echo $i;?>';" class="td_paginacion_activo">
		<?php echo $i;?>
		</td>
		<?php 
			}else{
				//echo "<a href='viviendas.php?pagina=$i' class='td_paginacion'>"; 
		?>
		 <td width="20" onclick="document.location.href='viviendas.php?pagina=<?php echo $i;?>';" class="td_paginacion">
		<?php echo $i;?>
		</td>		
		<?php //echo "</a>";
		} }
	  ?>
	   <td width="30" class="td_paginacion_resaltado">
		<?php
		if(($pagina + 1)<=$totalpag) {
		
		$pag = $pagina+1;
		
			echo " <a href='viviendas.php?pagina=$pag' class='dos'> >></a>";
		}
		?>
		</td>
	<?php		
	}	
	?>
					  
				  
					</table></td>
			</tr>
		
<?php //}?>
<tr>
<td id="cuatro" >
<div class="seccion_busq" id="capa" align="center"></div></p></div><br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</td>
</tr>

<tr id="cinco">
<td>
<img src="images/line.gif" width="945" height="1" />
</td>
</tr>        


</table>
</body>
<?php
	$conecc->cerrar();
?>
</html>
