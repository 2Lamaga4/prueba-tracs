<?php
/*
 * Buscador en AJAX. Ejemplo creado por Victor De la Rocha [http://www.mis-algoritmos.com]
 * http://www.mis-algoritmos.com/?p=169
 */
ini_set('display_errors','off'); 
//echo $_GET['page'].aui; 
//echo $_GET['q']."<br>";
include ("conexion.php");
//ini_set('display_errors','off');
$conecct = new conexion(); 
 
$e	= $_REQUEST['e'];

//require('config.php');
//require('include/conexion.php');
require('include/funciones.php');
require('include/pagination.class.php');

//$opc =$_REQUEST['opc'];
//echo $opc;

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
		$sqlStrAux = "SELECT count(*) as total FROM  `unidadv` WHERE Apartamento LIKE '%$q%' ORDER BY Apartamento";
	}else{
		$sqlStr = "SELECT * FROM unidadv ORDER BY Apartamento";
		$sqlStrAux = "SELECT count(*) as total FROM unidadv ORDER BY Apartamento";
	}
	

//echo $sqlStr;

//$aux =mysql_query($sqlStrAux,$link));
//$aux = $conecct ->consulta($sqlStrAux);
$aux =  Mysql_Fetch_Assoc($conecct -> consulta($sqlStrAux));	

$query = $conecct -> consulta($sqlStr.$limit);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cassius - software de propiedad horizontal</title>
<link rel="stylesheet" href="pagination.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
<script src="include/buscador.js" language="javascript"></script>
<script language="javascript">
<?php if($e==1){?>
alert("Se actualizo un Registro");
<?php }?>
</script>
<link href="config/estilos_cassius.css" rel="stylesheet" />
<link href="config/estilos_capas_cassius.css" rel="stylesheet"/>
<link href="config/estilos_globos_ayuda_cassius.css" rel="stylesheet"/>
</head>

<body class="interna2"
	onload="MM_preloadImages('images/btn_flecha_atras_roll.png','images/btn_flecha_adelante_roll.png')"
	OnContextMenu="return false">
<form action="index.php" onsubmit="return buscar()"> 
<div id="salir2">
          <input name="exit" type="button" class="boton_salir" id="exit"
			value="Salir" onclick="location.href='menu_home.php'" />
        </div>   
	<div id="utilidades">
       
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="35%" align="center"><input name="agregar" type="button"
					class="boton_agregar" id="agregar" value="Agregar"
					onclick="location.href='agregar_vivienda.php'" />
             <label></label>
             <input type="text" id="q" name="q" value="<?php if(isset($q)) echo $busqueda;?>" onkeyup="return buscar()" class="textarea_redondo2" />
             <input name="submit" type="submit" id="boton" value="Buscar" class="boton_agregar"/></td>
           <?php //<form id="buscar" name="buscar" action="Busca.php">?>
         </tr>
       </table>
  </div>
	 
  <div id="logo_small3"> <img src="images/logo_small2.png" name="logo_small" width="317"
			height="62" id="logo_small" /> </div>
    <div id="modulos"> <img src="images/modulo_registro.png" name="mod_registro" width="284"
			height="61" id="mod_registro" /> </div>
	<div id="fondo_contenido"></div>	
	<div id="contenido_tabla">
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
					$p->target("buscador.php?q=".urlencode($q));
				else
					$p->target("buscador.php");
			$p->currentPage($page);
			//$p->show();
			echo "\t<table width=\"600\" class=\"td_tabla_interna\" align=\"center\" >\n";
			//echo "<tr class=\"titulos\"><td>Titulo</td></tr>\n";
			$r=0;
			while($row = mysql_fetch_assoc($query)){
     
	  //$p->target("buscador.php?q=".urlencode($row['IdUnidadV']));
		  //echo "\t\t<tr class=\"row$r\"><td><a href=\"buscador.php/?p={$row['IdUnidadV']}\" target=\"_blank\">".htmlentities($row['Apartamento'])."</a></td></tr>\n";
          		//$p->target("buscador.php?q=".urlencode($q));
		  //echo "\t\t<tr class=\"row$r\"><td><a href=\"buscador.php/?p={$row['IdUnidadV']}\"".$p->target."\">".htmlentities($row['Apartamento'])."</a></td></tr>\n";
	 
	 
	 
	 /*<a href="<?php $p->target("buscador.php?q=".urlencode($q).'&id_apt='.urlencode($row['IdUnidadV']));?>"><?php echo $row['Apartamento'];?></a>*/
	 //<div id="contenido_tabla">
	 ?></form>

      <tr class="tr_tabla_interna">
         <td width="520"><?php echo $row['Apartamento'];?></td>
         <td align="center"><?php /*<a href="<?php $p->target("buscador.php?q=".urlencode($q).'&id_apt='.urlencode($row['IdUnidadV']));
		 //."&"."opc=1"
		 ?>">Eliminar</a> 
		 
		 modificar_vivienda.php?id=9&pagina=1
		 */?>
		 
         <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_vivienda.php?id=<?php echo $row['IdUnidadV'] ?>&page=<?php echo $page;   /*<a href="modificar_vivienda.php?id=<?php echo $row['IdUnidadV'];?>&page=<?php echo $page;?>">Modificar</a>*/?>&q=<?php echo $q;?>'"/> 
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
	
	

        
</body>
</html>

