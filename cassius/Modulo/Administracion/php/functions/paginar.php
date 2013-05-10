<?php
	function limits($pag,$RegistrosAMostrar){
		if($pag){
		  $RegistrosAEmpezar=($pag-1)*$RegistrosAMostrar;
		  $PagAct=$pag;
//caso contrario los iniciamos
		 }else{
		  $RegistrosAEmpezar=0;
		  $PagAct=1;
		 }
 	return $RegistrosAEmpezar;
	}


	 function paginar($pag,$RegistrosAMostrar,$NroRegistros,$modulo){

	if($RegistrosAMostrar<=0) $RegistrosAMostrar=10;
	if(is_numeric($pag)){
		  $RegistrosAEmpezar=($pag-1)*$RegistrosAMostrar;
		  $PagAct=$pag;
  //caso contrario los iniciamos
	 }else{
		  $RegistrosAEmpezar=0;
		  $PagAct=1;
		  $RegistrosAMostrar=10;
	 }



// echo $NroRegistros;
 $PagAnt=$PagAct-1;
 $PagSig=$PagAct+1;
 $PagUlt=$NroRegistros/$RegistrosAMostrar;

 //verificamos residuo para ver si llevará decimales
 $Res=$NroRegistros%$RegistrosAMostrar;
 // si hay residuo usamos funcion floor para que me
 // devuelva la parte entera, SIN REDONDEAR, y le sumamos
 // una unidad para obtener la ultima pagina
 if($Res>0) $PagUlt=floor($PagUlt)+1;

	 
	 //if(!is_numeric($RegistrosAMostrar)||!is_numeric($pag)||($PagAct>$PagUlt&&$PagUlt!=0)||$PagAct<1||!$RegistrosAMostrar)
		//header("Location: normatividad.php?page=1");
$sHtml='';
$sHtml.='<div class="paginador_simple"><span class="azul"> '.$PagAct.' </span> de '.$PagUlt.'</div>';
$sHtml.='<div class="paginacion">';

 for($i=1; $i<=$PagUlt; $i++){
    if($PagAct==$i)
		$sele="active";
  else $sele="pagina";

$sHtml.='<div class="'.$sele.'"><a href="'.$modulo.'.php?page='.$i.'">'.$i.' </a></div>';
 }
 $sHtml.='</div>';
 return $sHtml;
		}
      ?>