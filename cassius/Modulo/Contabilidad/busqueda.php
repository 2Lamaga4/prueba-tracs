<?php
include ("conexion.php");
//ini_set('display_errors','off');
$conecct = new conexion();


ini_set('display_errors','off');
//require('config.php');
//require('include/conexion.php');
require('include/funciones.php');
require('include/pagination.class.php');

$items = 20;
$page = 1;

if(isset($_GET['page']) and is_numeric($_GET['page']) and $page = $_GET['page'])
		$limit = " LIMIT ".(($page-1)*$items).",$items";
	else
		$limit = " LIMIT $items";

if(isset($_GET['q']) and !eregi('^ *$',$_GET['q'])){
		$q = sql_quote($_GET['q']); //para ejecutar consulta
		$busqueda = htmlentities($q); //para mostrar en pantalla



		$sqlStr = "SELECT *
				FROM  `unidadv` WHERE Apartamento LIKE '%$q%' ORDER BY Apartamento";
		$sqlStrAux = "SELECT count(*) as total FROM unidadv WHERE Apartamento LIKE '%$q%' ORDER BY Apartamento";
		//echo $sqlStr;
	}else{
		$sqlStr = "SELECT * FROM unidadv ORDER BY Apartamento";
		$sqlStrAux = "SELECT count(*) as total FROM unidadv ORDER BY Apartamento";
	}

//$aux = Mysql_Fetch_Assoc(mysql_query($sqlStrAux,$link));
//$query = mysql_query($sqlStr.$limit, $link);

$aux = Mysql_Fetch_Assoc($conecct -> consulta($sqlStrAux));
//$query = mysql_query($sqlStr.$limit, $link);
$query = $conecct -> consulta($sqlStr.$limit);


?>
<link href="config/estilos_capas_cassius.css" rel="stylesheet"/>
<link href="config/estilos_cassius.css" rel="stylesheet"/>
	<?php

		if($aux['total'] and isset($busqueda)){
				//echo "{$aux['total']} Resultado".($aux['total']>1?'s':'')." que coinciden con tu b&uacute;squeda \"<strong>$busqueda</strong>\".";
			}elseif($aux['total'] and !isset($q)){
				//echo "Total de registros: {$aux['total']}";
			}elseif(!$aux['total'] and isset($q)){
	?>		
				<br><br><br><span class="texto_azul2">No hay registros que coincidan con tu b&uacute;squeda <strong>"<?php echo $busqueda;?>"</strong>
	            <?php		}
	?>
	            </span>
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
			echo "\t<table width=\"600\" class=\"td_tabla_interna\" align=\"center\">\n";
			//echo "<tr class=\"titulos\"><td>Titulo</td></tr>\n";
			$r=0;
			while($row = mysql_fetch_assoc($query)){

	/*<a href="<?php $p->target("buscador.php?q=".urlencode($q));?><?php echo $p->target("buscador.php?q=".urlencode($q)).'&id_apt='.$row[IdUnidadV];?>"><?php echo $row['Apartamento'];?></a>*/
	?>
    
    <tr class="tr_tabla_interna">
    <td width="520"><?php echo $row['Apartamento'];?></td>
    <td align="center"><?php
	/*<a href="<?php $p->target("buscador.php?q=".urlencode($q).'&id_apt='.$row[IdUnidadV]);?>">Eliminar</a><a href="modificar_vivienda.php?id=<?php echo $row['IdUnidadV'];?>&page=<?php echo $page;?>">Modificar</a>*/
	?>
    
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