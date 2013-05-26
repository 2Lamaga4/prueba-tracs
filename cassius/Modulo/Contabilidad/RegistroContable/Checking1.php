 <?php


$vari=$_GET['tercero'];

     $checking=false;

   $msg='  
   <table  width="725" border="0" align="center" cellpadding="0" cellspacing="2"> 
    <tr> 
        <td height="30"  width="16" valign="middle"><a href="#"  id="s'.$vari.'"  onClick="javascript:eliminar(this)"> 
        <img src="../images/eliminar.png" width="16" height="16" border="0"></a></td>

        <td align="left" width="66"> 
                 <input class="textarea_redondo2"  style="width:60px;" autocomplete="off" name="cuenta'.$vari.'" id="'.+$vari.'" value="" class="textarea_redondo2" type="text" onblur="cuentas(this)"/>
                  <input    id="aux'.$vari.'" value="'.$vari.'" class="textarea_redondo2" type="hidden" value=""/> 
        </td>
        <td width="400">
             <div id="denominacion'.($vari).'"></div>
         </td>
         <td align="center" > 
                 <input   name="debito'.$vari.'"  id="debito'.$vari.'" class="textarea_redondo2"  style="width:80px;" type="text" value="" />

         </td>
          <td class="td_tabla_interna">
                 <input  name="credito'.$vari.'"  id="credito'.$vari.'"   style="width:80px;" type="text"  class="textarea_redondo2"  value="" />
          </td>

    </tr>

      <tr> 
      <div id="contenidos'.($vari+1).'"></div>  
      </tr>
      <tr> 
      <a id="'.($vari+1).'" href="javascript:void(0)" onclick="javascript:cargar('.(($vari)+1).','.(($vari)+1).')">agregar cuenta</a>
      </tr>
   </table>
 
  
   ';
   

  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 //border="0" width="510" 
?>

