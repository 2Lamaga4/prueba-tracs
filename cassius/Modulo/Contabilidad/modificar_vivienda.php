<?php

include_once ("conexion.php");
ini_set('display_errors','off');

//Se conecta a la base de datos
$conecc   = new conexion();
$confirma = $_GET['confirma'];
$pagina	  = $_GET['pagina'];

//$id = (empty($_GET['id'])?'':$_GET['id']);
$id = $_GET['id'];
if($id==""){
$id = $_POST['id'];	
}


$unidadv = "Select * from unidadv where idunidadv = $id";
//echo $unidadv .'<br>';
$resulunidadv = $conecc -> consulta($unidadv);
$rowunidadv = mysql_fetch_array($resulunidadv);

$propietario = "SELECT residentes.nombres, residentes.apellidos, residentes.idresidentes, residentes.propietario, residentes.idunidadv FROM residentes WHERE propietario = 1 and idunidadv = $id OR propietario = 2 and idunidadv = $id ORDER BY propietario DESC;";
//echo $propietario .'<br>';
$resultadoPro = $conecc -> consulta($propietario);

$residente = "SELECT residentes.nombres, residentes.apellidos, residentes.idresidentes, residentes.residente, residentes.idunidadv FROM residentes WHERE  residente = 1 and idunidadv = $id;";
//echo $residente .'<br>';
$resultadoRe = $conecc -> consulta($residente);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
	<title>Cassius - software de propiedad horizontal</title>
	<link href="config/estilos_cassius.css" rel="stylesheet"/>
<script >
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-480)/2;
  xposi=(ancho-440)/2;
  ventana.moveTo(xposi,yposi);
}

function habilita(obj){ 
    if( document.modicar_vivienda.identifica.disabled == true){
	//if(obj==1){
	
	document.modicar_vivienda.identifica.disabled = false; 
	document.modicar_vivienda.matricula.disabled = false;
	document.modicar_vivienda.coeficiente.disabled = false;
	document.modicar_vivienda.descripcion_vivienda.disabled = false; 	
	document.modicar_vivienda.desbloquear.value="Bloquear" 


   }else{
	document.modicar_vivienda.identifica.disabled = true; 
	document.modicar_vivienda.matricula.disabled = true;
	document.modicar_vivienda.coeficiente.disabled = true;
	document.modicar_vivienda.descripcion_vivienda.disabled = true;
    document.modicar_vivienda.desbloquear.value="Desbloquear" 
	}
}
   

/*function confirmar()
	{

	if(confirm("¿Está seguro que desea Eliminar?")) 
	{
   
		document.modicar_vivienda.submit();			
	
	}
	
}*/
   
function checkElements()
{

  /*
	  confirm("Favor digite Código de área")
	  return false
	
  this.form.action='epropietario.php'
  */

  ventana=confirm("Seguro que quieres Eliminarlo"); 
  
  if (ventana==true) 

  {
   this.form.action='epropietario.php?opc=1';
 
  }	  


}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
    </script>

<style type="text/css">
#parqueo_deposito {	position:absolute;
	width:332px;
	height:109px;
	z-index:8;
	overflow:auto;
}
</style>
</head>
<script src="Scripts/globos_ayuda.js" ></script>
<script src="Scripts/bloqueo_clic_derecho.js" ></script>
<script src="Scripts/uelimina.js" ></script>

</head>

<body class="interna2" OnContextMenu="return false" >
	<form id="modicar_vivienda" name="modicar_vivienda" method="post" action="">
   
    <input type="hidden" name="page" id="page" value="<?php echo $_REQUEST['page'];?>" />
    <input type="hidden" name="q" id="q" value="<?php echo $_REQUEST['q'];?>"/>
<div id="salir2">
	  <input name="exit" type="button" class="boton_salir" id="exit"
				value="Salir" onclick="location.href='buscador.php?page=<?php echo $_REQUEST['page'];?>&q=<?php echo $_REQUEST['q'];?>'" />
		</div>
		<div id="logo_small3">
			<img src="images/logo_small2.png" name="logo_small" width="317"
				height="62" id="logo_small" />
		</div>
		<div id="modulos">
			<img src="images/modulo_registro.png" name="mod_registro" width="284"
				height="61" id="mod_registro" />
		</div>
	  <div id="fondo_contenido"></div>
        <?php if($confirma == 1){?>
        <div id="cont_popup"></div>
        <div id="conte_adel" class="popup">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <table width="301" height="220" border="0" align="center" background="images/fondo_popup.jpg">
            <tr>
              <td width="318"><table width="291" border="0" align="center">
                <tr>
                  <td height="35" align="right" class="titulos"><a href="modificar_vivienda.php?id=<?php echo $id;?>"><img src="images/cerrar.gif" name="finalizar" width="29" height="26" border="0" id="finalizar" onmouseover="MM_swapImage('finalizar','','images/cerrar_roll.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
                </tr>
                <tr>
                  <td height="50" align="center" bgcolor="#04447D" class="titulos_blancos">Confirmación</td>
                </tr>
                <tr>
                  <td width="225" height="64" class="texto_azul">¿ Esta seguro que desea eliminar este registro ?</td>
                </tr>
                <tr>
                  <td height="57" align="center">
                  <input
				style="width: 90px;" name="Entrar2" type="submit"
				class="boton_redondo" id="Entrar2" value="::: Aceptar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"?> 
                onclick="this.form.action='epropietario.php?id=<?php echo $id;?>'"/>
                  <input
				style="width: 90px;" name="Entrar3" type="submit"
				class="boton_redondo" id="Entrar3" value="::: Cancelar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"?> onclick="this.form.action='modificar_vivienda.php?id=<?php echo $id;?>'" />
                </td>
                </tr>
              </table></td>
            </tr>
          </table>
          <?php }?>
      </div>
	  <div id="utilidades">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="31%" align="center">&nbsp;</td>
					<td width="69%" class="titulos">Agregar Viviendas</td>
				</tr>
			</table>
	  </div>
		<div id="contenido_tabla">
			<table width="950" border="0" align="center" cellpadding="0"
				cellspacing="0">
				<tr>
					<td align=""><table width="850" border="0" align="center"
							cellpadding="0" cellspacing="2">
							<tr>
								<td height="35" class="tr_tabla_interna2"><table width="800"
										border="0" align="center" cellpadding="0" cellspacing="0">
										<tr>
											<td width="102">Identificación:</td>
										  <td width="200"><dd>
												  <input name="identifica" type="text" value="<?php echo $rowunidadv['Apartamento'] ?>" class="textarea_redondo2" id="identifica"
														style="width: 100px;" disabled/>
                                                        <span class="hint2">Ingrese
														primero el bloque y luego la vivienda, ejemplo: 2 201<span
														class="hint-pointer2"></span> </span>
									                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
										  </dd></td>
											<td width="71">Matrícula:</td>
											<td width="167"><input name="matricula" type="text"
												disabled="disabled" class="textarea_redondo2" id="matricula"
												style="width: 150px;" value="<?php echo $rowunidadv['Matinmobiliaria'] ?>" /></td>
											<td width="87">&nbsp;&nbsp;Coeficiente:</td>
											<td width="173"><input name="coeficiente" type="text"
												disabled="disabled" class="textarea_redondo2"
												id="coeficiente" style="width: 100px;" value="<?php echo $rowunidadv['Coheficiente'] ?>" /></td>
										</tr>
									</table></td>
							</tr>
							<tr>
								<td height="35" class="tr_tabla_interna2"><table width="800"
										border="0" align="center" cellpadding="0" cellspacing="0">
										<tr>
											<td width="101" valign="top"><br /> Descripción:</td>
										  <td width="263" height="80" valign="middle"><label
												for="descripcion_vivienda"></label> <textarea
													name="descripcion_vivienda" cols="45" rows="5"
													disabled class="textarea_redondo2"
													id="descripcion_vivienda"
													style="width:250px; height:110px"><?php echo $rowunidadv['Descripcion'] ?></textarea>											</td>
											<td width="340" valign="top" align="left"><div id="parqueo_deposito">
                <table width="310" border="0" align="center" cellpadding="0" cellspacing="1">
                  <tr>
                    <td width="146" height="25" align="center" bgcolor="#E6CCCD"><strong>Parqueadero:</strong></td>
                    <td width="137" align="center" bgcolor="#C1C4D7"><strong>Depósito:</strong></td>
                    </tr>
                    <?php
					 
					/*$cons_parque="SELECT * 
								FROM  `des_apartamento`
								WHERE IdUnidadV = '$id' AND tip_ing = 'P' ";
					
					$resultadoparque = $conecc -> consulta($cons_parque);
					*/
					
					$cons_parque="SELECT * 
								FROM  `parqueaderos`,`aptoparq`
								WHERE aptoparq.IdUnidadV = '$id' AND aptoparq.idparqueadero = parqueaderos.idparqueadero";
								
					$resultadoparque = $conecc -> consulta($cons_parque);			
					
					//echo $cons_parque;
					
					
					$cons_depos="SELECT * 
									FROM  `aptobod`,`bodegas`
									WHERE aptobod.idbodega = bodegas.idbodega AND aptobod.IdunidadV = '$id'";
					
					$resultadocons_depos = $conecc -> consulta($cons_depos);
					
					
					?>
					
                  <tr valign="top">
                  
                    <td height="25" align="center" bgcolor="#EEDBDC"><table width="140" border="0" cellpadding="0" cellspacing="0">
                  <?php while($rowdetparq = mysql_fetch_array($resultadoparque)){?>  
                      <tr>
                        <th width="53" height="25" scope="col"><?php echo $rowdetparq[parqueadero];?></th>
                        <th width="87" scope="col"><input name="modificar_par1" type="button" class="boton_modificar_int" id="modificar_int15" value="Modificar" onclick="MM_openBrWindow('modificar_parqueadero.php?id=<?php echo $rowdetparq[id_reg];?>','AgregarParqueadero','scrollbars=yes,width=460px,height=340px')"/></th>
                        </tr>
                   <?php }?>     
                      </table></td>
                   
                    <td align="center" bgcolor="#D0D2E1"><table width="140" border="0" cellpadding="0" cellspacing="0">                    
                   <?php while($rowdetdep = mysql_fetch_array($resultadocons_depos)){?>   
                      <tr>
                        <th width="53" height="25" scope="col"><?php echo $rowdetdep[bodega];?></th>
                        <th width="87" scope="col"><input name="modificar_depo1" type="button" class="boton_modificar_int" id="modificar_int17" value="Modificar" onclick="MM_openBrWindow('modificar_deposito.php?id=<?php echo $rowdetdep[id_reg];?>','AgregarDeposito','scrollbars=yes,width=460px,height=440px')"/></th>
                        </tr>   
                      <?php }?>
                      </table></td>
                      
                  </tr>
                  <?php //}?>
                  <tr>
                    <td height="45" align="center" bgcolor="#EEDBDC"><input name="agregar_parqueadero" style="width:100px" type="button" class="boton_agregar" id="agregar_parqueadero" value="Agregar" onclick="MM_openBrWindow('agregar_parqueadero.php?id=<?php echo $id;?>','AgregarParqueadero','scrollbars=yes,width=460px,height=440px')"/></td>
                    <td height="45" align="center" bgcolor="#D0D2E1"><input name="agregar_deposito" style="width:100px" type="button" class="boton_agregar" id="agregar_deposito" value="Agregar" onclick="MM_openBrWindow('agregar_deposito.php?id=<?php echo $id;?>','AgregarDeposito','scrollbars=yes,width=460px,height=440px')"/></td>
                  </tr>
                  </table>
                </div></td>
										  <td width="96" valign="middle"><input style="width: 90px;"
												name="desbloquear" type="button" class="boton_redondo"
												id="desbloquear" value=" Desbloquear" onclick="habilita('1')" /></td>
                                  </tr>
                                           	
                                           
									</table></td>
							</tr>
						</table></td>
				</tr>
				<tr>
					<td height="5" align="center"><img src="images/line.gif"
						width="945" height="1" /></td>
				</tr>
				<tr>
					<td align=""><table width="850" border="0" align="center"
							cellpadding="0" cellspacing="2">
							<tr>
								<td height="50" align="center" valign="middle" bgcolor="#E6CCCD">
									<table width="200" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td><img src="images/icon_propietario.png" width="18"
												height="32" border="0" /></td>
											<td><input name="agregar_propietario" type="button"
												class="boton_agregar" style="width: 160px"
												id="agregar_propietario" value="Agregar Propietario"
		onclick="MM_openBrWindow('busqueda_pro.php?id=<?php echo $id?>&origen=2','AgregarPropietario','width=460px,height=530px,scrollbars=yes')" /></td>
                                        </tr>
									</table>
								<td align="center">&nbsp;</td>
								<td align="center" bgcolor="#C1C4D7"><table width="200"
										border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td><img src="images/icon_arrendatario.png" width="18"
												height="32" /></td>
											<td><input name="agregar_arrendatario" style="width: 160px"
												type="button" class="boton_agregar"
												id="agregar_arrendatario" value="Agregar Residente"
	        onclick="MM_openBrWindow('busqueda_res.php?id=<?php echo $id?>&origen=2','AgregarPropietario','width=460px,height=540px,scrollbars=yes')" />											</td>
										</tr>
								  </table></td>
							</tr>
							<tr>
								<td width="422" height="35" valign="top"><table width="420"
										border="0" align="center" cellpadding="0" cellspacing="2">
										<?php
										while($rowPropietarios = mysql_fetch_array($resultadoPro)){
											echo '<tr class="tr_tabla_interna"><strong>';
											echo '<td width="414"';
											if ($rowPropietarios['propietario'] == 2)
											echo 'class="td_resaltado"><strong>'.$rowPropietarios['nombres'].' '.$rowPropietarios['apellidos'];
											else 
											echo '<strong>'.$rowPropietarios['nombres'].' '.$rowPropietarios['apellidos'].'</strong></td>';																	
											
											?>
											<td width="87"><input name="modificar_int" type="submit"
											class="boton_modificar_int" id="modificar_int"
											value="Modificar"
                                        onclick="MM_openBrWindow('modificar_propietario.php?residente=<?php echo $rowPropietarios['idresidentes']?>&apto=<?php echo $rowPropietarios['idunidadv']?>','AgregarPropietario','width=460px,height =530px,scrollbars=yes')" />											</td>
											<td width="87">
                           <?php $residente = $rowPropietarios['idresidentes']; $apto=$rowPropietarios['IdUnidadV'];?>                                      <input name="eliminapropietario" type="submit" id="eliminapropietario"   class="boton_eliminar_int" <?php /*  onclick="checkElements()"*/?>  onclick="this.form.action='modificar_vivienda.php?confirma=<?php echo '1';?>'" value="Eliminar" /> 
                                          <input name="id_reg" type="hidden" value="<?php echo $residente;?>" />
											<tr>
									<?php
										echo '</tr>';
										}
									?>
									</table></td>
								<td width="10" align="center"><img
									src="images/linea_vertical.gif" width="1" height="150px" /></td>
							  <td width="402" align="center" valign="top"><table width="420"
										border="0" align="center" cellpadding="0" cellspacing="2">
										<?php
										while ($rowResidente = mysql_fetch_array($resultadoRe)){
											echo '<tr class="tr_tabla_interna">';
											echo '<td width="414" class="td_tabla_interna">'.$rowResidente['nombres'] .' '.$rowResidente['apellidos'] .'</td>';
											?>
											<td width="87"><input name="modificar_int" type="button"
											class="boton_modificar_int" id="modificar_int"
											value="Modificar"
                                        onclick="MM_openBrWindow('modificar_residente.php?residente=<?php echo $rowResidente['idresidentes']?>&apto=<?php echo $rowResidente['idunidadv']?>','AgregarPropietario','width=460px,height =530px,scrollbars=yes')" />											</td>
											<td width="87">
                      	<?php $residente = $rowResidente['idresidentes']; $apto=$rowResidente['idunidadv']; ?>                                      <input name="eliminaresidente" type="submit" id="eliminaresidente"   class="boton_eliminar_int" <?php /*onclick="this.form.action='epropietario.php'"*/?> onclick="this.form.action='modificar_vivienda.php?confirma=<?php echo '1';?>'" value="Eliminar" /> 
                                          <input name="id_reg" type="hidden" value="<?php echo $residente;?>" />  
                                       <?php
										echo '</tr>';
										}
										?>                 
								</table></td>
							</tr>
						</table></td>
				</tr>
				<tr>
					<td align=""><img src="images/line.gif" width="945" height="1" /></td>
				</tr>
				<tr>
				  <td height="40" align="center"><input style="width: 90px;"
						name="Entrar" type="submit" class="boton_redondo" id="Entrar" onclick="this.form.action='mvivienda.php?pagina=<?php echo $pagina;?>'"
						value="::: Aceptar :::" /></td>
				</tr>
			</table>
		</div>
	</form>
    <?php
	$conecc->cerrar();
	?>
</body>
</html>
