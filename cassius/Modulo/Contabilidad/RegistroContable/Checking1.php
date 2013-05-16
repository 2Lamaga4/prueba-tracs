 <?php


$vari=$_GET['tercero'];

     $checking=false;

   $msg='
   <input class="textarea_redondo2" type="text"/>
   <input class="textarea_redondo2" type="text"/>
   <input class="textarea_redondo2" type="text"/>
   <input class="textarea_redondo2" type="text"/>
   <div id="contenido'.($vari+1).'"></div>
   <a id="'.($vari+1).'" href="javascript:void(0)" onclick="javascript:cargar('.(($vari)+1).')">agregar cuenta</a>
   ';
   

  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
?>