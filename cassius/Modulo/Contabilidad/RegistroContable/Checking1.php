 <?php


$vari=$_GET['tercero'];

     $checking=false;

   $msg='
   <input autocomplete="off" name="cuenta'.+$vari.'" id="'.+$vari.'" value="" class="textarea_redondo2" type="text" onblur="cuentas(this)"/>
   <input  name="denominacion'.$vari.'"  id="denominacion'.$vari.'" class="textarea_redondo2" type="text" value=""/>
   <input   name="debito'.$vari.'"  id="debito'.$vari.'" class="textarea_redondo2" type="text" value=""/>
   <input  name="credito'.$vari.'"  id="credito'.$vari.'" class="textarea_redondo2" type="text" value=""/>

   <div id="contenido'.($vari+1).'"></div>

   <a id="'.($vari+1).'" href="javascript:void(0)" onclick="javascript:cargar('.(($vari)+1).','.(($vari)+1).')">agregar cuenta</a>
   ';
   

  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
?>
