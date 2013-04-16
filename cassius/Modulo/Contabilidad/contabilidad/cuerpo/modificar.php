<form name="form1" id="form1" action="agregar_documento2.php" method="post">
<table width="810" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB"><table width="256" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Agregar Cuenta</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center">
    
    
<div style="overflow:auto; width:1000px;">

<ul id="accordion">
<?php $cont = 0;
foreach($cuentas as $item){ 

  $cuentasN2 = $CuentaDAO->Lista_Nivel($item->getCuenta(),2);
?>

    
      <li<?php if($section == '' || $section == 'recent'): ?> class="current"<?php endif; ?>>
        
                <a href="?section=recent" class="heading ">
                
                  <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                          <td width="797" height="30"><table width="780" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>&nbsp;<strong><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></strong></td>
                              <td width="20"></td>
                            </tr>
                          </table></td>
                        </tr>
                    </table>                
                </a>
        <ul id="recent">

  <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">

   <?php foreach($cuentasN2 as $item2){ 
      $cuentasN3 = $CuentaDAO->Lista_Nivel($item2->getCuenta(),3);
   ?>
    <tr>
      <td height="25" class="td_nivel2"><table width="770" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><strong><?php echo $item2->getCuenta()." ".$item2->getDenominacion(); ?></strong></td>
          <td width="20"><a href="#"><img src="images/btn_mas.jpg" name="btn_mas" width="25" height="17" border="1" id="btn_mas" onmouseover="MM_swapImage('btn_mas','','images/btn_mas_roll.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        </tr>
      </table></td>
    </tr>
       <?php foreach($cuentasN3 as $item3){ 
                $cuentasN4 = $CuentaDAO->Lista_Nivel($item3->getCuenta(),4);
             ?>
                    <tr>
                      <td height="20"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="20" class="td_nivel3"><strong><?php echo $item3->getCuenta(); ?></strong> <?php echo $item3->getDenominacion(); ?></td>
                        </tr>
                       
                       <?php 
             foreach($cuentasN4 as $item4){ 
              $cuentasN5 = $CuentaDAO->Lista_Nivel($item4->getCuenta(),5);
            ?>
                            <tr>
                              <td height="20" class="td_nivel4"><strong><?php echo $item4->getCuenta(); ?></strong> <?php echo $item4->getDenominacion(); ?></td>
                            </tr>
                 <?php foreach($cuentasN5 as $item5){ 
                    if(count($_SESSION['datos']) > 0){
                    
                    $sel = "";
                    $sel2 = "";
                    for($a = 0; $a < count($_SESSION['datos']); $a++){
                      if(($_SESSION['datos'][$a] == $item5->getId()) && ($_SESSION['tipo'][$a] == "Débito")){
                        $sel = "checked";
                        $a = count($_SESSION['datos']) + 2; 
                      }else{
                        $sel = "";
                      }
                      
                      if(($_SESSION['datos'][$a] == $item5->getId()) && ($_SESSION['tipo'][$a] == "Crédito")){
                        $sel2 = "checked";
                        $a = count($_SESSION['datos']) + 2; 
                      }else{
                        $sel2 = "";
                      }
                    }
                    
                    
                    
                 ?>
                                    <tr>
                                      <td><table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
                                        <tr class="tr_tabla_interna">
                                          <td width="74" class="td_tabla_interna"><?php echo $item5->getCuenta(); ?></td>
                                          <td width="441" class="td_tabla_interna"><?php echo $item5->getDenominacion(); ?></td>
                                          <td width="87">Débito<input name="principal1<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal1<?php echo $item5->getId(); ?>" onclick="validar(<?php echo $item5->getId(); ?>,1);" value="<?php echo $item5->getId(); ?>" <?php echo $sel; ?> /></td>
                                          <td width="88">Crédito<input name="principal2<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal2<?php echo $item5->getId(); ?>"  onclick="validar(<?php echo $item5->getId(); ?>,2);" value="<?php echo $item5->getId(); ?>" <?php echo $sel2; ?> /></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                               <?php  }else{
                    
                  $afectas = $AfectaDAO->getList2($item5->getId(),$_REQUEST['id']);
          
                     ?>
                               
                                     <tr>
                                      <td><table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
                                        <tr class="tr_tabla_interna">
                                          <td width="74" class="td_tabla_interna"><?php echo $item5->getCuenta(); ?></td>
                                          <td width="441" class="td_tabla_interna"><?php echo $item5->getDenominacion(); ?></td>
                                          <td width="87">Débito<input name="principal1<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal1<?php echo $item5->getId(); ?>" onclick="validar(<?php echo $item5->getId(); ?>,1);" value="<?php echo $item5->getId(); ?>" <?php if(count($afectas) > 0){ if(($afectas->getIdpuc() == $item5->getId()) && $afectas->getTipo() == "Débito"){ ?>checked="checked"<?php } } ?> /></td>
                                          <td width="88">Crédito<input name="principal2<?php echo $item5->getId(); ?>" type="checkbox" class="chekbox2" id="principal2<?php echo $item5->getId(); ?>"  onclick="validar(<?php echo $item5->getId(); ?>,2);" value="<?php echo $item5->getId(); ?>" <?php if(count($afectas) > 0){  if(($afectas->getIdpuc() == $item5->getId()) && $afectas->getTipo() == "Crédito"){ ?>checked="checked"<?php } } ?> /></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                               
                               
                 <?php
                   }
                 $cont++;
              } 
            } 
             ?>

                      </table></td>
                    </tr>
            <?php } ?>
     <?php } ?>
    
    

  </table></ul>
  </li>
 
  
<?php } ?> </ul>
</div>
    
    
    
    
    
    </td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="images/line2.gif" width="800" height="1" /></td>
  </tr>
  <tr>
    <td height="70" valign="middle" align="center"><input style="width:90px;" name="Entrar" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" /></td>
  </tr>
</table>

</form>
