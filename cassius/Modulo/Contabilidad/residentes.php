<?php

ini_set('display_errors','off');
include_once("conexion.php");
require_once('calendar/classes/tc_calendar.php');
require('include/funciones.php');
require('include/pagination.class.php');

$conecct = new conexion();

//$doc	= $_POST['documento'];
$buscar	= $_POST['buscar'];
$pagina		=	$_REQUEST['pagina'];
$confirma = $_GET['confirma'];

$bot_buscar =$_REQUEST['Entrar2'];
/*if($bot_buscar==""){
$bot_buscar =$_GET['Entrar2'];	
}*/


if($bot_buscar <>  ""  ){
	
$Entrar2= "Entrar2";
	
//echo $Entrar2."<br>";
	
//|| $pagina <> ""	
	
$nombres 	= $_POST['nombres'];
if($nombres==""){
$nombres 	= $_GET['nombres'];	
}
$apellidos	= $_POST['apellidos'];
if($apellidos==""){
$apellidos	= $_GET['apellidos'];
}
$documento	= $_POST['documento'];
if($documento==""){
$documento	= $_GET['documento'];
}
$genero		= $_POST['genero'];
if($genero==""){
$genero		= $_GET['genero'];
}
$bloque		= $_POST['bloque'];
if($bloque==""){
$bloque		= $_GET['bloque'];
}
$tipo		= $_POST['tipo'];
if($tipo==""){
$tipo		= $_GET['tipo'];
}
$inicio_con		= $_POST['inicio_con'];
if($inicio_con==""){
$inicio_con		= $_GET['inicio_con'];
}
$fin		= $_POST['fin'];
if($fin==""){
$fin		= $_GET['fin'];
}

if($nombres <> ""){
$uno=" AND residentes.Nombres like '%$nombres%'";
}else{
}
if($apellidos <> ""){
$dos=" AND residentes.Apellidos like '%$apellidos%'";
}else{
}
if($documento <> ""){
$tres=" AND residentes.NoDocumento='$documento'";
}else{
}
if($genero	 <> "Todos"){
$cuatro=" AND residentes.IdGenero='$genero'";
}else{
}
/*
if($bloque	 <> ""){
$tres="AND residentes.IdGenero='$genero'";

substring(Apartamento,1,2)
}else{
}
*/
if($tipo  == "2"){
$cinco=" AND residentes.Propietario='$tipo'";
}elseif($tipo  == "1"){
$cinco=" AND residentes.Residente='$tipo' AND residentes.Propietario='' ";
}else{

}

if($bloque  <> "Todos"){
$seis=" AND substring(unidadv.Apartamento,1,2) = '$bloque'";
}else{
}

/*
if($fin <> "Todos"){
$siete=" AND residentes.IdGenero='$genero'";
}else{
}*/

if($inicio_con == "Todos" && $fin == "Todos"){
	
$sql_consulta_base="SELECT *
					FROM unidadv INNER JOIN residentes ON
					unidadv.IdUnidadV=residentes.IdUnidadV
					WHERE residentes.IdResidentes <> '' $uno$dos$tres$cuatro$cinco$seis
					ORDER BY unidadv.Apartamento";
					
$resul = $conecct->consulta($sql_consulta_base);
//echo $sql_consulta_base."<br>";
//echo "entro 1"."<br>";
}else{

$sql_consulta_base="SELECT unidadv.Apartamento,residentes.Nombres,residentes.Apellidos,residentes.FechaNacimiento, CURDATE( ) , 
(YEAR( CURDATE( ) ) - YEAR( FechaNacimiento )) - ( RIGHT( CURDATE( ) , 5 ) < RIGHT( FechaNacimiento, 5 ) ) AS age
				FROM unidadv INNER JOIN residentes ON unidadv.IdUnidadV=residentes.IdUnidadV
				WHERE residentes.IdResidentes <> '' $uno$dos$tres$cuatro$cinco$seis
				GROUP BY Apartamento,Nombres,Apellidos HAVING age between '$inicio_con' AND '$fin'";
					
$resul = $conecct->consulta($sql_consulta_base);

	}


}
/*
if($bot_buscar ==  "" && $buscar == ""){


$Entrar3= "Entrar3";
	

$sql_consulta_base = "SELECT * 
		FROM unidadv INNER JOIN residentes ON unidadv.IdUnidadV=residentes.IdUnidadV
		ORDER BY Apartamento";

$resul = $conecct -> consulta($sql_consulta_base);

}
*/


$items = 20;
$page = 1;

if(isset($_GET['page']) and is_numeric($_GET['page']) and $page = $_GET['page'])
		$limit = " LIMIT ".(($page-1)*$items).",$items";
	else
		$limit = " LIMIT $items";

if(isset($_GET['q']) and !eregi('^ *$',$_GET['q'])){

		$q = sql_quote($_GET['q']); //para ejecutar consulta
		$busqueda = htmlentities($q); //para mostrar en pantalla

//echo $busqueda.qqqq;

		$sqlStr = "SELECT * 
				FROM  `unidadv` WHERE Apartamento LIKE '%$q%' ORDER BY Apartamento";
		//$sqlStrAux = "SELECT count(*) as total FROM  `unidadv` WHERE Apartamento LIKE '%$q%' ORDER BY Apartamento";
	}else{
		$sqlStr = "SELECT * 
		FROM unidadv INNER JOIN residentes ON unidadv.IdUnidadV=residentes.IdUnidadV
		ORDER BY Apartamento";
		$sqlStrAux = "SELECT count(*) as total FROM unidadv INNER JOIN residentes ON unidadv.IdUnidadV=residentes.IdUnidadV
		ORDER BY Apartamento";
	}
	

//echo $sqlStr;

//$aux =mysql_query($sqlStrAux,$link));
//$aux = $conecct ->consulta($sqlStrAux);
$aux =  Mysql_Fetch_Assoc($conecct -> consulta($sqlStrAux));	

$query = $conecct -> consulta($sqlStr.$limit);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
	<title>Cassius - software de propiedad horizontal</title>
	<link href="config/estilos_cassius.css" rel="stylesheet"/>
	<link rel="stylesheet" href="pagination.css" media="screen">
        
        
<script src="include/buscador.js" language="javascript"></script>        
	<script>
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

function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-480)/2;
  xposi=(ancho-440)/2;
  ventana.moveTo(xposi,yposi);
}
</script>

    <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:160px;
	top:214px;
	width:487px;
	height:210px;
	z-index:8;
}
#Layer2 {
	position:absolute;
	left:250px;
	top:6px;
	width:244px;
	height:150px;
	z-index:9;
}
-->
    </style>
</head>
<script src="Scripts/globos_ayuda.js"></script>
<script src="Scripts/bloqueo_clic_derecho.js"></script>
<script src="Scripts/transicion.js"></script>
</head>

<body class="interna2"
	onload="MM_preloadImages('images/btn_flecha_atras_roll.png','images/btn_flecha_adelante_roll.png','images/cerrar_roll.gif')"
	OnContextMenu="return false">
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
	<div id="fondo_contenido_residentes"></div>

	<div id="utilidades">
		<form action="" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
			
            <tr>
				<td width="35%" align="center"><input name="buscar3" type="button"
					class="boton_excel" id="buscar3" value="Descargar Excel"  onclick="location.href='residentes.php?confirma=<?php echo '1';?>'"/></td>
				<td width="37%"><input name="buscar2" type="button"
					class="boton_pdf" id="buscar2" value="     Descargar PDF" onclick="MM_openBrWindow('pdf-php-mysql/generacion_pdf.php?nombres=<?php echo $nombres;?>&apellidos=<?php echo $apellidos;?>&documento=<?php echo $documento;?>&genero=<?php echo $genero;?>&bloque=<?php echo $bloque;?>&tipo=<?php echo $tipo;?>&inicio_con=<?php echo $inicio_con;?>&fin=<?php echo $fin;?>','AgregarPropietario','width=460px,height=480px')"/></td>
			  <td width="28%"><input name="buscar" type="submit"
					class="boton_buscar" id="buscar" value="Buscar"
					<?php //onclick="MM_openBrWindow('buscar_residente_gral.php','AgregarPropietario','width=460px,height=480px')" ?>/>
				 
				 
 			  </td>
			</tr>
		</table>
        </form>
	</div>
<div id="contenido_tabla">
	<?php 	if($total_registros <> "0"){ ?>
    <div id="resultados">
      <span id="loading"></span><?php
		if($aux['total'] and isset($busqueda)){
				//echo "{$aux['total']} Resultado".($aux['total']>1?'s':'')." que coinciden con tu b&uacute;squeda \"<strong>$busqueda</strong>\".";
			}elseif($aux['total'] and !isset($q)){
			//	echo "Total de registros: {$aux['total']}";
			}elseif(!$aux['total'] and isset($q)){
				echo"No hay registros que coincidan con tu b&uacute;squeda \"<strong>$busqueda</strong>\"";
			}
	?>
  <?php 
		if($aux['total']>0){
			$p = new pagination;
			$p->Items($aux['total']);
			$p->limit($items);
			if(isset($q))
					$p->target("residentes.php?q=".urlencode($q));
				else
					$p->target("residentes.php");
			$p->currentPage($page);
			//$p->show();
			echo "\t<table width=\"600\" class=\"td_tabla_interna\" align=\"center\" >\n";
			//echo "<tr class=\"titulos\"><td>Titulo</td></tr>\n";
			$r=0;
			while($row = mysql_fetch_assoc($query)){
     
							if($row['Residente'] <> "0"){
							$des_pro="Residente";
							}
							if($row['Propietario'] <> "0"){
							$des_pro="Propietario";
							}
	 ?>
     <tr class="tr_tabla_interna">
         <td><?php echo $row['Apartamento'];?></td>
         <td ><?php echo $des_pro;?></td>
         <td ><?php echo $row['Nombres']." ".$row['Apellidos'];?></td>
         
         <td align="center" width="80"><?php /*<a href="<?php $p->target("buscador.php?q=".urlencode($q).'&id_apt='.urlencode($row['IdUnidadV']));
		 //."&"."opc=1"
		 ?>">Eliminar</a> 
		 
		 modificar_vivienda.php?id=9&pagina=1
		          <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_vivienda.php?id=<?php echo $row['IdUnidadV'] ?>&page=<?php echo $page;   /*<a href="modificar_vivienda.php?id=<?php echo $row['IdUnidadV'];?>&page=<?php echo $page;?>">Modificar</a>?>&q=<?php echo $q;?>'"/> */
		 
		 ?>
		 

         <input name="modificar_int" type="submit"
											class="boton_modificar_int" id="modificar_int"
											value="Modificar"
                                        onclick="MM_openBrWindow('modificar_propietario.php?residente=<?php echo $row['IdResidentes']?>&apto=<?php echo $row['IdUnidadV']?>','AgregarPropietario','width=460px,height =530px,scrollbars=yes')" />
		 </td>
      </tr>
     		<?php	  
		  if($r%2==0)++$r;else--$r;
        }
		echo "\t</table>\n";
		?>
        
		<tr>
		<td height="5" align="center"><img src="images/line.gif" width="945"
				height="1" /></td>
		</tr>
       
     
	 <?php
			//echo "\t</table>\n";
			$p->show();
		}
	?> 

  <?php }else{?>	
 	<br>
	<br>
	<br>
	<br>
	<span class="texto_azul2"><strong>no existen datos para esta búsqueda</strong>
	<br>
	<br>
	<a href="residentes.php">::Regresar::</a>
	</span>
	
  <?php }?>
        </div>
	<?php if(@$buscar=='Buscar'){?>
<div id="cont_popup"></div>
	<div id="conte_adel" class="popup">
	<form  method="post" action="residentes.php">
      <table width="532" height="421" border="0" align="center" cellspacing="1" background="images/fondo_popup.jpg" bgcolor="#FFFFFF">
        <tr>
          <td height="25"><div align="right"><a href="residentes.php"><img src="images/cerrar.gif" name="finalizar" width="29" height="26" border="0" id="finalizar" onMouseOver="MM_swapImage('finalizar','','images/cerrar_roll.gif',1)" onMouseOut="MM_swapImgRestore()" /></a></div></td>
        </tr>
        <tr>
          <td><table width="430" border="0" align="center" cellpadding="0"
		cellspacing="0">
            <tr>
              <td height="50" align="center" valign="middle" bgcolor="#04447D"><table
					width="260" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="41"><img src="images/icon_buscar.png" width="27"
							height="29" border="0" /> </td>
                    <td width="219" class="titulos_blancos">Buscar Residente</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td width="422" height="35" valign="top"><table width="430"
					border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="10"></td>
                  </tr>
                  <tr>
                    <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="105" class="texto_azul"><strong>Nombres:</strong> </td>
                          <td width="235"><input name="nombres" type="text"
										class="textarea_redondo2" id="nombres" style="width: 200px;" />
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="18"><img src="images/line2.gif" width="428"
							height="1" /> </td>
                  </tr>
                  <tr>
                    <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="105" class="texto_azul"><strong>Apellidos:</strong> </td>
                          <td width="235"><input name="apellidos" type="text"
										class="textarea_redondo2" id="apellidos" style="width: 200px;" />
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
                  </tr>
                  <tr>
                    <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="105" class="texto_azul"><strong>Documento:</strong> </td>
                          <td width="235"><input name="documento" type="text"
										class="textarea_redondo2" id="documento" style="width: 200px;" />
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
                  </tr>
                  <tr>
                    <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="105" class="texto_azul"><strong>Genero:</strong> </td>
                          <td width="235"><label for="documento_tipo"></label>
                              <?php		  
										$sqlgenero = "SELECT * FROM `genero`;";
											
										$genero = $conecct->consulta($sqlgenero);

										echo '<select name="genero" class="textarea_redondo2" id="genero" style="width:110px; height:27px;">';
										 echo '<option value='.Todos.'>'.Todos.'</option>';
										while($rowgenro = mysql_fetch_array($genero))
										  echo '<option value='.$rowgenro["IdGenero"].'>'.$rowgenro["Genero"].'</option>';
										echo "</select>";
										?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
                  </tr>
                  <tr>
                    <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="105" class="texto_azul"><strong>Bloque:</strong> </td>
                          <td width="235"><label for="documento_tipo"></label>
                              <?php		  
										$sqlgenero = "SELECT substring(Apartamento,1,2) Apt
													FROM `unidadv`
													GROUP BY Apt
													ORDER BY Apt ASC;";
											
										$genero = $conecct->consulta($sqlgenero);

										echo '<select name="bloque" class="textarea_redondo2" id="bloque" style="width:110px; height:27px;">';
										 echo '<option value='.Todos.'>'.Todos.'</option>';
										while($rowapt = mysql_fetch_array($genero))
										  echo '<option value='.$rowapt["Apt"].'>'.$rowapt["Apt"].'</option>';
										echo "</select>";
										?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
            </tr>
            <tr>
              <td height="35"><table width="340" border="0" align="center"
								cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="105" class="texto_azul"><strong>Tipo:</strong> </td>
                    <td width="235"><label for="documento_tipo"></label>
                        <?php		  
				
				echo '<select name="tipo" class="textarea_redondo2" id="tipo" style="width:110px; height:27px;">';

				echo '<option value='.Todos.'>'.Todos.'</option>';
				
				echo '<option value='.'2'.'>'.Propietario.'</option>';
				
				echo '<option value='.'1'.'>'.Residente.'</option>';
				
				echo "</select>";
					?></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
            </tr>
            <tr>
              <td height="35"><table width="345" border="0" align="center"
								cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="75" class="texto_azul"><strong>Edades:</strong> </td>
                    <td width="270"><label for="documento_tipo"></label>
                        <span class="texto_azul_peque">entre
                          <?php		  
												  
								echo '<select name="inicio_con" class="textarea_redondo2" id="inicio_con" style="width:110px; height:27px;">';
								echo '<option value='.Todos.'>'.Todos.'</option>';
								for($i=0;$i<=100;$i++){
								echo '<option value='.$i.'>'.$i.'</option>';
								}
								echo "</select>";
										?>
                          y
                          <?php		  
												  
								echo '<select name="fin" class="textarea_redondo2" id="fin" style="width:110px; height:27px;">';
								echo '<option value='.Todos.'>'.Todos.'</option>';
								for($i=0;$i<=100;$i++){
								echo '<option value='.$i.'>'.$i.'</option>';
								}
								echo "</select>";
										?>
                      </span> </td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="18" valign="middle" align="center"><img
				src="images/line2.gif" alt="" width="428" height="1" /> </td>
            </tr>
            <tr>
              <td height="18" valign="middle" align="center"><input
				style="width: 90px;" name="Entrar2" type="submit"
				class="boton_redondo" id="Entrar2" value="::: Buscar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"?> />
              </td>
            </tr>
            <tr></tr>
          </table></td>
        </tr>
      </table>
  </form>
</div>
<?php }?>
<?php if($confirma == 1){?>
<div id="cont_popup"></div>
<div id="conte_adel" class="popup">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<form method="post" action="residentes.php">  
  <table width="371" height="220" border="0" align="center" background="images/fondo_popup.jpg">
    <tr>
      <td width="308"><table width="337" border="0" align="center">
        <tr>
          <td height="35" align="right" class="titulos"><a href="residentes.php"><img src="images/cerrar.gif" name="finalizar21" width="29" height="26" border="0" id="finalizar21" onmouseover="MM_swapImage('finalizar21','','images/cerrar_roll.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        </tr>
        <tr>
          <td height="50" align="center" bgcolor="#04447D" class="titulos_blancos">Filtros de Descarga</td>
        </tr>
        <tr>
          <td width="298" height="64" class="texto_azul"><p>Seleccione las opciones para la generacion de archivo en Excel.
            </p>
            <table width="315" border="0" align="center">
              <tr>
                <td width="113" align="left">Apartamento</td>
                <td width="27" align="center"><input type="checkbox" name="Apartamento" id="Apartamento" />
                  <label for="checkbox"></label></td>
                <td width="19">&nbsp;</td>
                <td width="83" align="left">Telefono</td>
                <td width="51" align="center"><input type="checkbox" name="Telefono" id="Telefono" /></td>
              </tr>
              <tr>
                <td align="left">Torre</td>
                <td align="center"><input type="checkbox" name="Torre" id="Torre" /></td>
                <td>&nbsp;</td>
                <td align="left">Celular</td>
                <td align="center"><input type="checkbox" name="Celular" id="Celular" /></td>
              </tr>
              <tr>
                <td align="left">Nombres</td>
                <td align="center"><input type="checkbox" name="Nombres" id="Nombres" /></td>
                <td>&nbsp;</td>
                <td align="left">Genero</td>
                <td align="center"><?php		  
										$sqlgenero = "SELECT * FROM `genero`;";
											
										$genero = $conecct->consulta($sqlgenero);

										echo '<select name="genero" class="textarea_redondo2" id="genero" style="width:110px; height:27px;">';
										 echo '<option value='.Todos.'>'.Todos.'</option>';
										while($rowgenro = mysql_fetch_array($genero))
										  echo '<option value='.$rowgenro["IdGenero"].'>'.$rowgenro["Genero"].'</option>';
										echo "</select>";
										?></td>
              </tr>
              <tr>
                <td align="left">Apellidos</td>
                <td align="center"><input type="checkbox" name="Apellidos" id="Apellidos" /></td>
                <td>&nbsp;</td>
                <td align="left">&nbsp;</td>
                <td align="center">&nbsp;</td>
              </tr>
              <tr class="texto_blanco">
                <td colspan="5" align="center">&nbsp;</td>
              </tr>
              <tr class="texto_blanco">
                <td colspan="5" align="center" bgcolor="#04447D"><strong>Edades</strong></td>
                </tr>
              <tr>
                <td colspan="5" align="center"><span class="texto_azul_peque">entre
                  <?php		  
												  
								echo '<select name="inicio_con" class="textarea_redondo2" id="inicio_con" style="width:110px; height:27px;">';
								echo '<option value='.Todos.'>'.Todos.'</option>';
								for($i=0;$i<=100;$i++){
								echo '<option value='.$i.'>'.$i.'</option>';
								}
								echo "</select>";
										?>
                  y
                  <?php		  
												  
								echo '<select name="fin" class="textarea_redondo2" id="fin" style="width:110px; height:27px;">';
								echo '<option value='.Todos.'>'.Todos.'</option>';
								for($i=0;$i<=100;$i++){
								echo '<option value='.$i.'>'.$i.'</option>';
								}
								echo "</select>";
										?>
                </span></td>
                </tr>
      </table></td>
        </tr>
        <tr>
          <td height="57" align="center">
            <input style="width: 90px;" name="Entrar" type="submit"
				class="boton_redondo" id="Entrar" value="::: Aceptar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"
				/*onclick="this.form.action='epropietario.php?id=<?php echo $id;?>'"*/
				?> 
                onclick="this.form.action='genera_excel.php?id=<?php echo $id;?>'"
                />
				
            <input
				style="width: 90px;" name="Entrar3" type="submit"
				class="boton_redondo" id="Entrar3" value="::: Cancelar :::"
				<?php // this.form.action='residentes.php', //onclick="cerrarVentana()"?> onclick="this.form.action='residentes.php'" />
          </td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form>
<?php }?>  
</div>	
</body>
</html>
