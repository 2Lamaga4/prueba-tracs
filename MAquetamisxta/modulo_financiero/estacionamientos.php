<?php
ini_set('display_errors','off');
include_once("conexion.php");
require_once('calendar/classes/tc_calendar.php');

$conecct = new conexion();
//$enviar = new conexion();
$pagina		=	$_REQUEST['pagina'];
$id_reg		= $_GET['id_reg'];
$dato_cons	= $_GET['datos'];
//echo $id_reg."<br>";

$unidad_v	= $_GET['id'];
$origen		= $_GET['origen'];

//echo $_POST['comment'].comentario."<br>";


//




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<title>Cassius - software de propiedad horizontal</title>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script src="Ajaxnuevo.js"></script>
<script type="text/javascript">
function mostrar(a) {
//alert(a);
if(a =='1'){
		switchMenu('uno');
		switchMenu('dos');
		switchMenu('tres');
		//alert ("Muestra");
	}else{
		switchMenu2('uno');
		switchMenu2('dos');
		switchMenu2('tres');
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


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
#subtitulo {
	position:absolute;
	left:50%;
	top:95px;
	width:552px;
	height:35px;
	z-index:8;
	margin-left:-190px;
}
</style>
</head>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="interna2" onload="MM_preloadImages('images/btn_comunales.jpg','images/btn_visitantes.jpg')" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='menu_home.php'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_registro.png" name="mod_registro" width="284" height="61" id="mod_registro" /></div>
<div id="fondo_home_estacionamiento"></div>
<div id="contenido_tabla2">
  <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400"><table width="974" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="50" align="center" valign="top"><a href="estacionamientos.php"><img src="images/btn_privados_active.jpg" name="privado" width="322" height="46" id="privado" /></a><a href="estacionamientos_comunales.php"><img src="images/btn_comunales_down.jpg" name="comunales" width="323" height="46" border="0" id="comunales" onmouseover="MM_swapImage('comunales','','images/btn_comunales.jpg',1)" onmouseout="MM_swapImgRestore()" /></a><a href="estacionamientos_visitantes.php"><img src="images/btn_visitantes_down.jpg" name="visitante" width="318" height="46" border="0" id="visitante" onmouseover="MM_swapImage('visitante','','images/btn_visitantes.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        </tr>
      <tr>
        <td height="20" align="center"><table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
          <tr>
            <td width="810" height="40" colspan="3" align="right"><table width="400" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="53%" align="right">&nbsp;</td>
                <td width="37%"><input name="busca" type="text" class="textarea_redondo2" id="busca" style="width:150px;" onKeyUp="busca(this.value)"  onfocus="mostrar('2')"/></td>
                <td width="10%"><img src="images/icon_buscar2.png" width="33" height="28" /></td>
                </tr>
              </table></td>
            </tr>
          <tr id='uno'>
            <td height="30" colspan="3" class="texto_blanco"><table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr class="texto_blanco" >
                <td height="25" bgcolor="#DF5563" align="center"><strong>Parqueadero</strong></td>
                <td bgcolor="#DF5563" align="center"><strong>Vivienda</strong></td>
                <td width="86" align="center" bgcolor="#DF5563"><strong>Placa</strong></td>
                <td bgcolor="#DF5563" align="center"><strong>Residente</strong></td>
                <td bgcolor="#DF5563" align="center"><strong>Acciones</strong></td>
                </tr>
              <?php 
			  							
		/*			
					$cons_parque="SELECT *
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`,`vehiculos`,`vehparq`,`marcaveh`,`color`
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.IdUnidadV= residentes.IdUnidadV 
								AND unidadv.IdUnidadV= residentes.IdUnidadV AND vehparq.idvehiculo = vehiculos.idvehiculo AND vehiculos.idmarca =marcaveh.idmarca AND vehiculos.idcolor =color.idcolor
								GROUP BY residentes.NoDocumento";*/
					
				/*	SELECT * 
								FROM  `parqueaderos`,`aptoparq`
								WHERE aptoparq.IdUnidadV = '$id' AND aptoparq.idparqueadero = parqueaderos.idparqueadero*/
					
								
					$cons_parque="SELECT *
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`
								
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.IdUnidadV = unidadv.IdUnidadV AND unidadv.IdUnidadV = residentes.IdUnidadV  AND parqueaderos.idtipopq = '1'
								GROUP BY unidadv.IdUnidadV,parqueaderos.idparqueadero";			
								
					
					
					$resultadoparque = $conecct -> consulta($cons_parque);
			
					$total_registros		=	mysql_num_rows($resultadoparque);
			
					$datos		=	1;
					
								
					if (!$pagina) {
					$inicio=0;
					$pagina=1;
					}
					else{
					$inicio = ($pagina - 1) * $datos; 
					}
					$cons_parque.=" LIMIT $inicio,$datos";		
				//$result_query = mysql_query($mysql_query, $db);
					$resultadoparque = $conecct -> consulta($cons_parque);
		
			$totalpag	  =	ceil($total_registros/$datos);
			
			
			
					while($row=mysql_fetch_array($resultadoparque)){
					
			 ?>  
              <tr class="tr_tabla_interna">
                <td width="104" align="center"><?php echo $row[parqueadero];?></td>
                <td width="92" align="center"><?php echo $row[Apartamento];?></td>
             <?php 			
			  $cons_placa_veh="SELECT *
								FROM `vehiculos`,`vehparq`
								
								WHERE vehiculos.idvehiculo=vehparq.idvehiculo AND vehparq.idparqueadero='$row[idparqueadero]'";
					
			$resultadocons_placa_veh = $conecct -> consulta($cons_placa_veh);
			
			$row_par=mysql_fetch_array($resultadocons_placa_veh);
			
			?>
                <td align="center"><?php echo $row_par[placa]?></td>
                <td width="488" class="td_tabla_interna"><?php echo $row[Nombres].' '.$row[Apellidos];?></td>
                <td width="118"><?php if($id_reg <> $row[idparqueadero]){ ?>    
                  <input name="btn_mas9" type="submit" class="boton_mas_int" id="btn_mas9"  value=" " onclick="location.href='estacionamientos.php?id_reg=<?php echo $row[idparqueadero];?>&pagina=<?php echo $pagina;?>'"/>              
            <?php }else{ ?>
                  <input name="btn_menos" type="submit" class="boton_menos_int" id="btn_menos"  value=" " onclick="location.href='estacionamientos.php?pagina=<?php echo $pagina;?>'"/>
            <?php }?>      
                  <input name="modificar_int" type="submit" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_esta_privado.php?id_reg=<?php echo $row[idparqueadero];?>&pagina=<?php echo $pagina;?>'"/></td>
                </tr>             
        <?php 
			if($id_reg == $row[idparqueadero]){
			
			/*$sql_ver_datos="SELECT *,(YEAR( CURDATE( ) ) - YEAR( FechaNacimiento )) - ( RIGHT( CURDATE( ) , 5 ) < RIGHT( FechaNacimiento, 5 ) ) AS EDAD 
								FROM  `des_apartamento`,`unidadv`,`residentes`
								WHERE des_apartamento.IdUnidadV = unidadv.IdUnidadV AND residentes.IdUnidadV = unidadv.IdUnidadV  AND tip_ing = 'P' AND des_apartamento.id_reg = '$id_reg' GROUP BY residentes.IdUnidadV";
			*/
			
			/*$sql_ver_datos="SELECT *
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`,`vehiculos`,`vehparq`,`marcaveh`,`color`
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.IdUnidadV= residentes.IdUnidadV 
								AND unidadv.IdUnidadV= residentes.IdUnidadV AND aptoparq.id_reg = '$id_reg' AND vehparq.idvehiculo = vehiculos.idvehiculo AND vehiculos.idmarca =marcaveh.idmarca AND vehiculos.idcolor =color.idcolor
								GROUP BY residentes.NoDocumento";
			*/
			
	
/*	
SELECT *
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`,`vehiculos`,`vehparq`,`marcaveh`,`color`
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.IdUnidadV= residentes.IdUnidadV 
								AND unidadv.IdUnidadV= residentes.IdUnidadV AND aptoparq.id_reg = '$id_reg' AND vehparq.idvehiculo = vehiculos.idvehiculo AND vehiculos.idmarca =marcaveh.idmarca AND vehiculos.idcolor =color.idcolor AND aptoparq.id_reg = '$id_reg'
								GROUP BY residentes.NoDocumento
*/									
			
			
			/*
			$sql_ver_datos="SELECT *,parqueaderos.Matinmobiliaria AS matriparq,parqueaderos.Coheficiente AS coheparq
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`,`color`,`vehiculos`,`vehparq`,`marcaveh`
								
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.idparqueadero= vehparq.idparqueadero AND aptoparq.IdUnidadV = unidadv.IdUnidadV AND unidadv.IdUnidadV= residentes.IdUnidadV AND parqueaderos.idparqueadero = '$id_reg' AND vehparq.idvehiculo = vehiculos.idvehiculo AND vehiculos.idcolor =color.idcolor AND vehiculos.idmarca = marcaveh.idmarca
								GROUP BY residentes.IdUnidadV";
			*/
			$sql_ver_datos="SELECT *,parqueaderos.Matinmobiliaria AS matriparq,parqueaderos.Coheficiente AS coheparq
								FROM `parqueaderos`,`aptoparq`,`residentes`,`unidadv`,`color`,`vehiculos`,`vehparq`,`marcaveh`
								
								WHERE aptoparq.idparqueadero=parqueaderos.idparqueadero AND aptoparq.idparqueadero= vehparq.idparqueadero AND aptoparq.IdUnidadV = unidadv.IdUnidadV AND unidadv.IdUnidadV= residentes.IdUnidadV AND parqueaderos.idparqueadero = '$id_reg' AND vehparq.idvehiculo = vehiculos.idvehiculo AND vehiculos.idcolor =color.idcolor AND vehiculos.idmarca = marcaveh.idmarca
								GROUP BY residentes.IdUnidadV,parqueaderos.idparqueadero";
			
			
								
			//echo $sql_ver_datos.'<br>';

			$resul_ver_datos = $conecct->consulta($sql_ver_datos);
			
			while($rowdos=mysql_fetch_array($resul_ver_datos)){
			
			/*
			if($rowdos[IdGenero]==1){
			$genero="Masculino";
			}else{
			$genero="Femenino";	
			}*/
			
			
			?>                
              <tr>
                <td height="30" colspan="5" align="center" class="texto_azul_peque"><strong>Marca:</strong> <?php echo $rowdos[marca];?> - <strong>Color:</strong> <?php echo $rowdos[color];?>  - <strong>Modelo:</strong> <?php echo $rowdos[modelo];?> - <strong>CC:</strong> <?php echo $rowdos[NoDocumento];?> - <strong>coeficiente:</strong> <?php echo $rowdos[coheparq];?> - <strong>Matrícula:</strong> <?php echo $rowdos[matriparq]?></td>
                </tr>
            <?php }}}?>    
              </table></td>
            </tr>
            <?php //}?>
          </table></td>
      </tr>
      <tr id="dos">
        <td height="20" align="center"><img src="images/line.gif" width="945" height="1" /></td>
      </tr>
      <tr>
        <td align="rigth"><table width="30%" border="0" align="right"
						cellpadding="0" cellspacing="1">
          <tr id="tres">
            <td width="30" height="25" align="right"><span class="texto_azul">Página</span>:</td>
            <td width="30" height="25" class="td_paginacion_resaltado"><?php if($total_registros) {?>
              <?php if(($pagina - 1) > 0) { 
		
		$pag = $pagina-1;
		echo"<a href='estacionamientos.php?pagina=$pag' class='dos'><<</a>";
		
		}?>
              <?php }?></td>
            <?php
	/* Esta seccion de codigo se ejecuta la paginacion, creando los numeros de pagina que son los enlaces contando los registro qeu se encuentran almacenados en la base*/
	 if($total_registros) {
	  
		
		
		for ($i=1; $i<=$totalpag; $i++){ 
		?>
            <?php
			if ($pagina == $i) {
				
				$pagina= $pagina; 
		?>
            <td width="20" onclick="document.location.href='estacionamientos.php?pagina=<?php echo $i;?>';" class="td_paginacion_activo"><?php echo $i;?></td>
            <?php 
			}else{
				//echo "<a href='viviendas.php?pagina=$i' class='td_paginacion'>"; 
		?>
            <td width="20" onclick="document.location.href='estacionamientos.php?pagina=<?php echo $i;?>';" class="td_paginacion"><?php echo $i;?></td>
            <?php //echo "</a>";
		} }
	  ?>
            <td width="30" class="td_paginacion_resaltado"><?php
		if(($pagina + 1)<=$totalpag) {
		
		$pag = $pagina+1;
		
			echo " <a href='estacionamientos.php?pagina=$pag' class='dos'> >></a>";
		}
		?></td>
            <?php		
	}	
	?>
          </tr>
        </table></td></tr>
      </table></td>
  </tr>
  <tr>
  <td><div class="seccion" id="capa" align="center"></div></td>
  </tr>
  </table>

</div>
</div>

</body>
</html>
